<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
    $table->bigIncrements('id');
   $table->string('doctor_name');
   $table->date('date_of_birth');
   $table->string('specialization');
   $table->string('experience');
   $table->string('age');
   $table->string('phone');
   $table->string('email');
   $table->string('gender');
   $table->longText('doctor_details');
   $table->longText('address');
   $table->string('file');
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
        Schema::dropIfExists('doctors');
    }
}
