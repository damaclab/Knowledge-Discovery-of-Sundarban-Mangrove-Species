<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::redirect('/', 'home');
Route::get('home', 'HomeController@index')->name('home');
Route::get('documentation', 'HomeController@documentation')->name('documentation');
Route::get('datasets', 'HomeController@datasets')->name('datasets');
Route::get('algorithms', 'HomeController@algorithms')->name('algorithms');
Route::get('about-us', 'HomeController@about');
Route::get('publications', 'HomeController@publications')->name('publications');
Route::get('contact-us', 'HomeController@contact');
Route::get('algorithm-details', 'HomeController@runAlgorithmDetails');

// Request functions
Route::post('upload', 'RequestController@guestFileUpload');
Route::post('run-algorithm', 'RequestController@guestRunAlgorithm');
Route::post('fetch-algorithms-by-type', 'RequestController@guestFetchAlgorithmsByType'); // AJAX Endpoint
Route::post('fetch-datasets-by-algorithm', 'RequestController@guestFetchDatasetsByAlgorithm'); // AJAX Endpoint
Route::post('fetch-datasets-by-type', 'RequestController@guestFetchDatasetsByType'); // AJAX Endpoint
Route::post('download-dataset', 'RequestController@guestFileDownload');
