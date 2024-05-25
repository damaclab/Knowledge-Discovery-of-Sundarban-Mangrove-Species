<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use File;
use ZipArchive;
use DB;
use App\GuestUser;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
// use Illuminate\Http\File;
use Illuminate\Validation\Rule;

class RequestController extends Controller
{
	public function __construct()
	{
		// $this->middleware('auth');
	}

	private function verifyCaptcha($response_token) {
		try {
			$url = "https://www.google.com/recaptcha/api/siteverify";

			$response = Http::asForm()->post($url, [
				"response" => $response_token,
				"secret" => env('CAPTCHA_SECRET')
			]);

			if($response->status() == 200) {
				if($response->json()['success'] == false) {
					return $response->json()['error-codes'][0];
				}
				else {
					return "success";
				}
			} 
			else {
				return "Cannot verify captcha. Please try again.";
			}
		}
		catch(\Exception $e) {
			return "Unexpected error occurred. Please try again after sometime.";
		}
	}

	private function _fetchOrInsertGuestUser(Request $request) {
		$guest_token = $request->cookie('kdb_guest')!==null?$request->cookie('kdb_guest'): HasUUID::generateUUID(4);
		$guest_user = GuestUser::where('guest_id', $guest_token)->first();

		if($guest_user == null) {
			date_default_timezone_set("Asia/Kolkata");

			$new_user = new GuestUser;
			$new_user->guest_id = $guest_token;
			$new_user->ip_address = $request->server('SERVER_ADDR');
			$new_user->user_agent = $request->server('HTTP_USER_AGENT');
			$new_user->requests = 0;

			$new_user->save();
		}

		return $guest_token;
	}

	public function guestFileUpload(Request $request) {
		if(Auth::check()) {
			return "Not Allowed";
		}
		else {
			$guest_token = $this->_fetchOrInsertGuestUser($request);

			if ($request->file('file')->isValid()) {
				$request->validate([
					'file' => 'bail|required|file|max:82000',
				]);
				
				$ext = $request->file('file')->getClientOriginalExtension();
				$filename = $request->file('file')->getClientOriginalName();

				$guest_user = GuestUser::where('guest_id', $guest_token)->first();
				
				$storage_path = Storage::putFileAs('uploads/datasets', $request->file, $filename);


				date_default_timezone_set("Asia/Kolkata");
				DB::table('guest_users')->where('guest_id', $guest_user->guest_id)->increment('requests');

				$data = DB::table('datasets')->insert([
					'dataset_id' => HasUUID::generateUUID(4),
					'uploader_id' => $guest_user->guest_id,
					'dataset_type' => strtoupper($ext),
					'dataset_name' => strtoupper($filename) ,
					'dataset_path' => $storage_path,
					'dataset_size' => 0,
					'created_at' => date("d-m-Y H:i:s"),
					'updated_at' => date("d-m-Y H:i:s")
				]);

				return response()->json([
					'message' => 'success',
					'errors' => [
						'request' => 'File uploaded successfully!'
					]
				], 200)->cookie('kdb_guest', $guest_token, 120);
			}
			else {
				return response()->json([
					'message' => 'file_not_valid',
					'errors' => [
						'request' => 'Invalid file'
					]
				], 400);
			}
		}
	}

	public function guestFileDownload(Request $request) {
		$validated_data = $request->validate([
			'dataset_id' => ['bail', 'required', 'uuid', 'exists:datasets,dataset_id'],
			'g-recaptcha-response' => ['bail', 'required']
		]);
		
		try {
			$captcha_response = $this->verifyCaptcha($validated_data['g-recaptcha-response']);
			if($captcha_response != "success")
				return redirect()->route('datasets'); // return $captcha_response;


			$dataset = DB::table('datasets')->select('dataset_path')->where('dataset_id', $request->dataset_id)->distinct('dataset_name')->first();

			return Storage::download($dataset->dataset_path);
		}
		catch(\Exception $e) {
			return redirect()->route('datasets');
		}
	}

	public function guestFetchAlgorithmsByType(Request $request) {
		$algorithms = DB::table('algorithms')->select('algorithm_id', 'algorithm_type', 'algorithm_name', 'publication_url')->where('algorithm_type', $request->algorithm_type)->distinct('algorithm_name')->get();
		
		return $algorithms;
	}

	public function guestFetchDatasetsByAlgorithm(Request $request) {
		$algorithm = DB::table('algorithms')->select('algorithm_id', 'algorithm_name', 'dataset_type')->where('algorithm_id', $request->algorithm_id)->first();

		$datasets = DB::table('datasets')->select('dataset_id', 'dataset_type', 'dataset_name', 'dataset_path')->where('dataset_type', $algorithm->dataset_type)->distinct('dataset_name')->get();
		
		return $datasets;
	}

	public function guestFetchDatasetsByType(Request $request) {
		$datasets = DB::table('datasets')->select('dataset_id', 'dataset_type', 'dataset_name', 'dataset_path')->where('dataset_type', $request->dataset_type)->distinct('dataset_name')->get();
		
		return $datasets;
	}

	public function guestRunAlgorithm(Request $request) {
		$validated_data = $request->validate([
			'algorithm_id' => ['bail', 'required', 'uuid', 'exists:algorithms,algorithm_id'],
			'dataset_id' => ['bail', 'required', 'uuid', 'exists:datasets,dataset_id'],
			'g-recaptcha-response' => ['bail', 'required']
		]);

		$algorithm = DB::table('algorithms')->select('algorithm_id', 'algorithm_name')->where('algorithm_id', $request->algorithm_id)->first();

		$dataset = DB::table('datasets')->select('dataset_id', 'dataset_type', 'dataset_name', 'dataset_path')->where('dataset_id', $request->dataset_id)->first();

		// echo "...Running ".$algorithm->algorithm_name." on dataset ".$dataset->dataset_name. ". This process will take some time. Output file will get downloaded automatically.\n" ;

		if($algorithm->algorithm_name == "Biclustering") {
			$validated_data = $request->validate([
				'min_row' => ['bail', 'required', 'numeric', 'min:2'],
				'min_col' => ['bail', 'required', 'numeric', 'min:2'],
				'rule_generation' => ['bail', 'required', 'string'],
				'min_threshold_1' => ['bail', 'required', 'numeric', 'min:0', 'max:1'],
				'min_threshold_2' => ['bail', 'required', 'numeric', 'min:0', 'max:1'],
			]);
			
			// Cleaning output files from previous run
			$files = Storage::allFiles('code/biclustering/output');
			Storage::delete($files);

			$response = null;
			$cmd = "cd storage/app/code/biclustering && CellBiClust.jar ../../".$dataset->dataset_path." , output output ".$validated_data['min_row']." ".$validated_data['min_col']." ".$validated_data['rule_generation']." ".$validated_data['min_threshold_1']." ".$validated_data['min_threshold_2'];
			exec($cmd, $response);

			try {
				$zip = new \ZipArchive();
				$output_filename = 'app/code/biclustering/output/biclustering_output.zip';
				if ($zip->open(storage_path($output_filename), \ZipArchive::CREATE)== TRUE)
				{
					$files = File::files(storage_path('app/code/biclustering/output'));
					foreach ($files as $key => $value){
						$filename = basename($value);
						$zip->addFile($value, $filename);
					}
					$zip->close();
				}
				return Storage::download("code/biclustering/output/biclustering_output.zip");
			}
			catch(\Exception $e) {
				echo "<br>...Error occurred while running algorithm. Please verify the inputs and retry!<br>";
				return print_r($response);
			}
		} 
		else if($algorithm->algorithm_name == "Frequent Pattern Mining") {
			$validated_data = $request->validate([
				'item_count' => ['bail', 'required', 'numeric', 'min:1'],
				'transaction_count' => ['bail', 'required', 'numeric', 'min:1'],
				'threshold' => ['bail', 'required', 'numeric', 'min:0', 'max:1'],
			]);

			Storage::delete('code/frequent_pattern_mining/output.txt');

			$response = null;
			$cmd = "cd storage/app/code/frequent_pattern_mining && java -cp . Project ../../".$dataset->dataset_path." ".$validated_data['item_count']." ".$validated_data['transaction_count']." ".$validated_data['threshold'];
			exec($cmd, $response);
			
			foreach($response as $res) {
				echo "\n";
				echo $res;
			}

			echo "\n";

			try {
				return Storage::download("code/frequent_pattern_mining/output.txt");
			}
			catch(\Exception $e) {
				echo "<br>...Error occurred while running algorithm. Please verify the inputs and retry!<br>";
				return print_r($response);
			}
			
		} else {
			echo "Invalid Algorithm or Dataset! Please retry.";
		}
	}
}
