<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\GuestUser;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Http\File;

class ServiceController extends Controller
{
	private $GUEST_REQUESTS_TABLE = "guest_requests";
	private $USER_REQUESTS_TABLE = "user_requests";

	public function guestRequest(Request $request) {

	}
}
