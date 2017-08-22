<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Job;

class Job extends Model
{
     public function display()
			{
				
			$job = App\Job::where('id', Auth::user()->id)->get();

			}
}
