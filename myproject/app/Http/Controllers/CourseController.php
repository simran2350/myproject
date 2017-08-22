<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\laravel;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\course;
use Session;



class CourseController extends Controller
{
    	
	public function store(Request $request)
	{
		
		$course = new Course;
		$course->term = Input::get("term");
		$course->year = Input::get("year");
		$course->course1 = Input::get("course1");
		$course->course2 = Input::get("course2");
		$course->save();
	
         return view('student');
	}
}
