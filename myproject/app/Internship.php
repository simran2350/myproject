<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Internship;

class Internship extends Model
{
    public function display()
			{
				
			$internship = App\Internship::where('id', Auth::user()->id)->get();

			}
}
