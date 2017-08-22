<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\laravel;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\student;
use Session;


class DetailsController extends Controller
{
    	
	public function store(Request $request)
	{
		
		$user = new Student;
		$user->name = Input::get("name");
		$user->middle_name = Input::get("middle_name");
		$user->last_name = Input::get("last_name");
		$user->email = Input::get("email");
		$user->day = Input::get("day");
		$user->month = Input::get("month");
		$user->year = Input::get("year");
		$user->gender = Input::get("gender");
		$user->street_address = Input::get("street_address");
		$user->street_address_2 = Input::get("street_address_2");
		$user->city = Input::get("city");
		$user->state_province = Input::get("state_province");
		$user->postal_zip_code = Input::get("postal_zip_code");
		$user->country = Input::get("country");
		$user->area_code = Input::get("area_code");
		$user->phone_number = Input::get("phone_number");
		$user->status = Input::get("status");
		$user->curr_past = Input::get("curr_past");
		$user->save();
	
        return view('student');    
	   

	
	}
	
	
}
