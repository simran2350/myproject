<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('middle_name');
			$table->string('last_name');
			$table->string('email',50);
			$table->string('day');
            $table->string('month');
            $table->string('year');
            $table->string('gender');
            $table->string('street_address');
            $table->string('street_address_2');
            $table->string('city');
            $table->string('state_province');
            $table->string('postal_zip_code');
            $table->string('country');
            $table->string('area_code');
            $table->string('phone_number');
            $table->string('status');
            $table->string('curr_past');
            $table->timestamps();
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                Schema::dropIfExists('students');

    }
}
