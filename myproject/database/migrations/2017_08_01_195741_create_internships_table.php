<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('icompany');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('contact_position');
            $table->string('addr_line1');
            $table->string('addr_line2');
            $table->string('city');
            $table->string('state');
            $table->string('postalcode');
            $table->string('country');
            $table->string('cemail');
            $table->string('areacode');
            $table->string('phonenum');
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
                Schema::dropIfExists('internships');

    }
}
