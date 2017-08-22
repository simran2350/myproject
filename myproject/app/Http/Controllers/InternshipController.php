<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\laravel;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\internship;
use App\job;
use Session;
use DB;


class InternshipController extends Controller
{
    	
	public function store(Request $request)
	{
		
		$intern = new Internship;
		$intern->icompany = Input::get("icompany");
		$intern->firstname = Input::get("firstname");
		$intern->lastname = Input::get("lastname");
		$intern->contact_position = Input::get("contact_position");
		$intern->addr_line1 = Input::get("addr_line1");
		$intern->addr_line2 = Input::get("addr_line2");
		$intern->city = Input::get("city");
		$intern->state = Input::get("state");
		$intern->postalcode = Input::get("postalcode");
		$intern->country = Input::get("country");
		$intern->cemail = Input::get("cemail");
		$intern->areacode = Input::get("areacode");
		$intern->phonenum = Input::get("phonenum");
		$intern->save();
	
	    
	
	        return view('student');    

	}
}

