<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\laravel;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\job;
use App\internship;
use Session;


class JobController extends Controller
{
    	
	public function store(Request $request)
	{
		
		$job = new Job;
		$job->job_group = Input::get("job_group");
		$job->company = Input::get("company");
		$job->internship_type = Input::get("internship_type");
		$job->position = Input::get("position");
		$job->description = Input::get("description");
		$job->responsibilities = Input::get("responsibilities");
		$job->salary = Input::get("salary");
		$job->adder_line1 = Input::get("adder_line1");
		$job->adder_line2 = Input::get("adder_line2");
		$job->jcity = Input::get("jcity");
		$job->jstate = Input::get("jstate");
		$job->postal = Input::get("postal");
		$job->jcountry = Input::get("jcountry");
		$job->job_status = Input::get("job_status");
		$job->save();
		
		
	
	        return view('student');    

	}
}

