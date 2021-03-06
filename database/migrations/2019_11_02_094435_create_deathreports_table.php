<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeathreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deathreports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_id');
            $table->date('date');
            $table->string('title');
            $table->string('description');
            $table->string('doctor_name');
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
        Schema::dropIfExists('deathreports');
    }
}
