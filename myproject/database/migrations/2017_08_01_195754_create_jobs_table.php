<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
			$table->string('job_group');
            $table->string('company');
            $table->string('internship_type');
            $table->string('position');
            $table->string('description');
            $table->string('responsibilities');
            $table->string('salary');
            $table->string('adder_line1');
            $table->string('adder_line2');
            $table->string('jcity');
            $table->string('jstate');
            $table->string('postal');
            $table->string('jcountry');
            $table->string('job_status');
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
                Schema::dropIfExists('jobs');

    }
}
