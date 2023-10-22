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
        Schema::create('courses_records', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('course_code');
            $table->string('lecturer_assigned');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('start_time');
            $table->string('venue');
            $table->string('module_leader');

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
        Schema::dropIfExists('courses_records');
    }
};
