<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Student;
use App\Internship;
use App\Job;
use App\Course;
use App\User;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;


class FacultyController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth:faculty');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('faculty');
    }
	
	public function allf()
	{
		$allf = DB::table('students')->get();
		return view('allf')->with('allf',$allf);
	}
}
