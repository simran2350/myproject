<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Student;

class Student extends Model
{				 
		 
			public function display()
			{
				
			$student = App\Student::where('id', Auth::user()->id)->get();

			}	

}
