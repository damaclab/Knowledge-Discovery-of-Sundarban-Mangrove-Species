<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotation;
use App\Contact;
use App\Newsletter;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Support\Facades\Mail;
use App\Mail\Notification;
use Illuminate\Support\Facades\Http;

class CommunicationController extends Controller
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

	public function pricing(Request $request) {
		date_default_timezone_set("Asia/Kolkata");

		try {
			$validated_data = $request->validate([
				'name' => 'bail|required|max:128',
				'email' => 'bail|required|email|max:128',
				'country_code' => 'bail|required|min:2',
				'phone' => 'bail|required|numeric|digits_between:7,15',
				'subject' => 'bail|required|max:128|in:ecommerce,web-development,app-development,admin-panel-development,logo-design,other',
				'message' => 'bail|required|max:191',
				'g-recaptcha-response' => 'bail|required'
			]);
		}
		catch(\Exception $e) {
			if(array_key_exists("name",$e->validator->messages()->messages())) 
				return $e->validator->messages()->messages()['name'][0];
			else if(array_key_exists("email",$e->validator->messages()->messages())) 
				return $e->validator->messages()->messages()['email'][0];
			else if(array_key_exists("country_code",$e->validator->messages()->messages())) 
				return $e->validator->messages()->messages()['country_code'][0];
			else if(array_key_exists("phone",$e->validator->messages()->messages())) 
				return $e->validator->messages()->messages()['phone'][0];
			else if(array_key_exists("subject",$e->validator->messages()->messages())) 
				return $e->validator->messages()->messages()['subject'][0];
			else if(array_key_exists("message",$e->validator->messages()->messages())) 
				return $e->validator->messages()->messages()['message'][0];
			else if(array_key_exists("g-recaptcha-response",$e->validator->messages()->messages())) 
				return "Recaptcha missing. Please try again.";
		}

		$captcha_response = $this->verifyCaptcha($validated_data['g-recaptcha-response']);

		if($captcha_response != "success")
			return $captcha_response;
		
		try {
			Quotation::create([
				'quotation_id' => HasUUID::generateUUID(4),
				'name' => $request->name,
				'email' => $request->email,
				'country_code' => $request->country_code,
				'phone' => $request->phone,
				'subject' => $request->subject,
				'message' => $request->message,
				'created_at' => date("d-m-Y H:i:s"),
				'updated_at' => date("d-m-Y H:i:s")
			]);
		}
		catch(\Exception $e) {
			return "Unexpected error occurred. Please try again after sometime.";
		}

		try {
			Mail::to($request->email)
			->cc("care@sellzmart.com")
			->bcc("shabnam.banu@gmail.com")
			->send(new Notification($request));
			//Mail::to("care@sellzmart.com")->send(new Notification($request));
			//Mail::to("shabnam.banu@gmail.com")->send(new Notification($request));

		}
		catch(\Exception $e) {
			return "OK";
		}

		return 'OK';
	}

	public function contact(Request $request) {
		date_default_timezone_set("Asia/Kolkata");

		try {
			$validated_data = $request->validate([
				'name' => 'bail|required|max:128',
				'email' => 'bail|required|email|max:128',
				'country_code' => 'bail|required|min:2',
				'phone' => 'bail|required|numeric|digits_between:7,15',
				'subject' => 'bail|required|max:128',
				'message' => 'bail|required|max:191',
				'g-recaptcha-response' => 'bail|required'
			]);
		}
		catch(\Exception $e) {
			if(array_key_exists("name",$e->validator->messages()->messages())) 
				return $e->validator->messages()->messages()['name'][0];
			else if(array_key_exists("email",$e->validator->messages()->messages())) 
				return $e->validator->messages()->messages()['email'][0];
			else if(array_key_exists("country_code",$e->validator->messages()->messages())) 
				return $e->validator->messages()->messages()['country_code'][0];
			else if(array_key_exists("phone",$e->validator->messages()->messages())) 
				return $e->validator->messages()->messages()['phone'][0];
			else if(array_key_exists("subject",$e->validator->messages()->messages())) 
				return $e->validator->messages()->messages()['subject'][0];
			else if(array_key_exists("message",$e->validator->messages()->messages())) 
				return $e->validator->messages()->messages()['message'][0];
			else if(array_key_exists("g-recaptcha-response",$e->validator->messages()->messages())) 
				return "Recaptcha missing. Please try again.";
		}

		$captcha_response = $this->verifyCaptcha($validated_data['g-recaptcha-response']);

		if($captcha_response != "success")
			return $captcha_response;

		try {
			Contact::create([
				'contact_id' => HasUUID::generateUUID(4),
				'name' => $request->name,
				'email' => $request->email,
				'country_code' => $request->country_code,
				'phone' => $request->phone,
				'subject' => $request->subject,
				'message' => $request->message,
				'created_at' => date("d-m-Y H:i:s"),
				'updated_at' => date("d-m-Y H:i:s")
			]);
		}
		catch(\Exception $e) {
			return "Unexpected error occurred. Please try again after sometime.";
		}

		try {
			Mail::to($request->email)
			->cc("care@sellzmart.com")
			->bcc("shabnam.banu@gmail.com")
			->send(new Notification($request));
			// Mail::to("care@sellzmart.com")->send(new Notification($request));
			// Mail::to("shabnam.banu@gmail.com")->send(new Notification($request));

		}
		catch(\Exception $e) {
			return "OK";
		}

		return 'OK';
	}

	public function newsletter(Request $request) {
		date_default_timezone_set("Asia/Kolkata");

		try {
			$validated_data = $request->validate([
				'email' => 'bail|required|email|unique:newsletters,email|max:128'
			]);
		}
		catch(\Exception $e) {
			if(array_key_exists("email",$e->validator->messages()->messages())) 
				return $e->validator->messages()->messages()['email'][0];
		}

		try {
			Newsletter::create([
				'newsletter_id' => HasUUID::generateUUID(4),
				'email' => $request->email,
				'created_at' => date("d-m-Y H:i:s"),
				'updated_at' => date("d-m-Y H:i:s")
			]);

		}
		catch(\Exception $e) {
			return "Unexpected error occurred. Please try again after sometime.";
		}

		try {
			// Mail::to($request->email)->send(new Notification($request));
			// Mail::to("care@sellzmart.com")->send(new Notification($request));
			// Mail::to("shabnam.banu@gmail.com")->send(new Notification($request));

		}
		catch(\Exception $e) {
			return "OK";
		}

		return 'OK';
	}
}
