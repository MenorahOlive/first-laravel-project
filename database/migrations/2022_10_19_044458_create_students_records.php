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
        Schema::create('students_records', function (Blueprint $table) {
            $table->id();
            $table->string('Full_Name');
            $table->string('Adm_NO');
            $table->string('Email');
            $table->string('Program_Enrolled');
            $table->string('Phone_NO');
            $table->string('is Leader');
            $table->string('Mentor_Details');
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
        Schema::dropIfExists('students_records');
    }
};
