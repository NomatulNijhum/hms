<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAllotmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allotments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('room_number');
            $table->string('room_type');
            $table->Integer('patient_id');
            $table->Integer('doctor_id');
            $table->date('allot_date');
            $table->date('discharge_date');
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
        Schema::dropIfExists('room_allotments');
    }
}
