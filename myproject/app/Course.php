<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Course;

class Course extends Model
{
    public function display()
			{
				
			$course = App\Course::where('id', Auth::user()->id)->get();

			}
}
