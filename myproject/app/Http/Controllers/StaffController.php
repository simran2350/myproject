<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Mail\OrderShipped;
use Mail;
use App\Student;
use App\Internship;
use App\Job;
use App\Course;
use App\User;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;


class StaffController extends Controller
{
	
	
	
	
    public function __construct()
    {
        $this->middleware('auth:staff');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff');
    }
	
	public function index1()
	{
		return view('email');
	}
	
	public function getemail()
	{
		$showstud = DB::table('users')
            ->join('students', 'users.id', '=', 'students.id')
            ->join('jobs', 'students.id', '=', 'jobs.id')
            ->select('users.id','users.name','users.email')
			->where([['students.curr_past','=','current'],['jobs.job_status','=','Open']])
            ->get();
			
			return view('emailshow')->with('showstud',$showstud);
	}
	
	public function semail()
	{
		$showstud = DB::table('users')
            ->join('students', 'users.id', '=', 'students.id')
            ->join('jobs', 'students.id', '=', 'jobs.id')
            ->select('users.email')
			->where([['students.curr_past','=','current'],['jobs.job_status','=','Open']])
            ->get();
			
		         Mail::to($showstud)->send( new OrderShipped);
            		return view('staff');
	}
	
	
	public function all()
	{
		$all = DB::table('students')->get();
		return view('all')->with('all',$all);
	}
	
	public function withopenjob()
	{
		$woj = DB::table('students')
		  ->join('jobs','students.id','=','jobs.id')
		  ->select('students.id','students.name','jobs.job_status')
		   ->where('job_status','=','Open')
		   ->get();
		   return view('withopenjob')->with('woj',$woj);
	}
	
	public function sc()
	{
		$name = Input::get("Enter_country :  ");
		$sc = DB::table('students')
		     ->select('students.id','students.name','students.email','students.country') 
		      ->where('country','=','india')
			  ->get();
			  
			 return view('sc')->with('sc',$sc); 
	}
	
	public function withjob()
	{
		$wj = DB::table('students')
		  ->join('jobs','students.id','=','jobs.id')
		  ->select('students.id','students.name','jobs.job_status')
		   ->where('job_status','=','Unopened')
		   ->get();
		   return view('withjob')->with('wj',$wj);
	}
	
	public function woj()
	{
		$woj = DB::table('students')
		   ->join('jobs','students.id','=','jobs.id')
		  ->select('students.id','students.name','jobs.job_status')
		  ->where('job_status','=','Closed')
		  ->get();
		  return view('woj')->with('woj',$woj);
	}
	
	public function avcgpa()
	{
		$avcgpa = DB::table('students')
		  ->join('courses','students.id','=','courses.id')
		  ->select('students.id','students.name','courses.average_cgpa')
		    ->get();
			return view('avcgpa')->with('avcgpa',$avcgpa);
	}
	
	public function cjy()
	{
		$cjy = DB::table('students')
		  ->join('jobs','students.id','=','jobs.id')
		  ->join('courses','courses.id','=','jobs.id')
		  ->select('students.id','students.name','students.country','jobs.job_status','courses.year')
		   ->where([['jobs.job_status','=','Unopened'],
		   ['students.country','=','India'],
		   ['courses.year','=','2017']])
		   ->get();
		   
		   return view('cjy')->with('cjy',$cjy);
	}
	
	public function withjobyear()
	{
		$wjy = DB::table('students')
		  ->join('jobs','students.id','=','jobs.id')
		  ->join('courses','courses.id','=','jobs.id')
		  ->select('students.id','students.name','jobs.job_status','courses.year')
		   ->where([['jobs.job_status','=','Unopened'],
		   ['courses.year','=','2017']])
		  ->get();
		  return view('withjobyear')->with('wjy',$wjy);
	}
	
	public function withoutjobyear()
	{
		$wojy = DB::table('students')
		  ->join('jobs','students.id','=','jobs.id')
		  ->join('courses','courses.id','=','jobs.id')
		  ->select('students.id','students.name','jobs.job_status','courses.year')
		   ->where([['job_status','=','Closed'],
		   ['courses.year','=','2017']])
		   ->get();
		   return view('withoutjobyear')->with('wojy',$wojy);
	}
	
	public function employers()
	{
		$em = DB::table('jobs')
		   ->select('jobs. company')->distinct()->get();
		   
		   return view('employers')->with('em',$em);
	}
	
}
