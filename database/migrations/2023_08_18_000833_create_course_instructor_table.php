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
        Schema::create('course_instructor', function (Blueprint $table) {
            $table->bigInteger('course_id',false,true);
            $table->bigInteger('instructor_id',false,true);
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('instructor_id')->references('id')->on('instructors');
            $table->primary(['course_id','instructor_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_instructor');
    }
};
