<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Student', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('Name');
            $table->string('Email')->unique();
            $table->string('Department');
            $table->string('College');
            $table->integer('Advisor_Id');
            $table->integer('Previous_Hours');
            $table->integer('Left_Hours');
            $table->integer('Recorded_Hours');
            $table->integer('Level');
            $table->string('Study_Type');
            $table->string('General_Status');
            $table->integer('Current_Semester');
            $table->string('Academic_Status');
            $table->string('Academic_Degree');
            $table->integer('GPA');







        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
