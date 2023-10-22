<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers_records', function (Blueprint $table) {
            $table->id();
            $table->string('Full_Name');
            $table->string('Id_No');
            $table->string('Email');
            $table->string('Lecture_Program');
            $table->string('Phone_NO');
            $table->string('Mentee_Details');
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
        Schema::dropIfExists('lecturers_records');
    }
};
