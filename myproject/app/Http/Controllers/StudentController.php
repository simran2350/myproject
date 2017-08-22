<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use App\Student;
use Auth;
use App\Course;
use App\Internship;
use App\Job;
use DB;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
		return view('student');				  
		
    }
	
	public function index1()
    {
        return view('details');
    }
	
	public function index2()
    {
        return view('course');
    }
	
	public function index3()
    {
        return view('internship');
    }
	
	public function index4()
    {
        return view('job');
    }
	
	public function index5()
    {
		
		$student = Student::find(Auth::user()->id);
		$course = Course::find(Auth::user()->id);
		$internship = Internship::find(Auth::user()->id);
		$job = Job::find(Auth::user()->id);
		
        return view('studentdetails')->with('student',$student)->with('course',$course)->with('internship',$internship)->with('job',$job); 			
    }
	
	
	
}
