<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('index');
    }

    public function documentation() {
        return view('documentation');
    }

    public function publications() {
        $journals = DB::table('publications')->where('publication_type', 'Journal')->orderBy('year_of_publication', 'desc')->get();
        $conferences = DB::table('publications')->where('publication_type', 'Conference')->orderBy('year_of_publication', 'desc')->get();
        return view('publications', ['journals' => $journals, 'conferences' => $conferences]);
    }

    public function datasets() {
        $dataset_types = DB::table('datasets')->select('dataset_type')->distinct()->get();
        return view('datasets', ['captcha_key' => env('CAPTCHA_KEY'), 'dataset_types' => $dataset_types]);
    }

    public function algorithms() {
        $algorithms = DB::table('algorithms')->select('algorithm_type')->distinct('algorithm_type')->get();
        return view('algorithms', ['captcha_key' => env('CAPTCHA_KEY'), 'algorithms' => $algorithms]);
    }

    public function runAlgorithmDetails(Request $request) {
        $validated_data = $request->validate([
            'algorithm_id' => ['bail', 'required', 'uuid', 'exists:algorithms,algorithm_id'],
            'dataset_id' => ['bail', 'required', 'uuid', 'exists:datasets,dataset_id'],
            // 'g-recaptcha-response' => ['bail', 'required']
        ]);

        $algorithm = DB::table('algorithms')->select('algorithm_id', 'algorithm_type', 'algorithm_name')->where('algorithm_id', $request->algorithm_id)->first();

        $dataset = DB::table('datasets')->select('dataset_id', 'dataset_type', 'dataset_name')->where('dataset_id', $request->dataset_id)->first();

        return view('algorithm-details', ['captcha_key' => env('CAPTCHA_KEY'), 'dataset' => $dataset, 'algorithm' => $algorithm]);
    }
}
