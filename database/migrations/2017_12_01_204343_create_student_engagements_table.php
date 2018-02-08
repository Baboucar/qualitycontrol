<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentEngagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_engagements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('interest_stimulation');
            $table->integer('question_opportunities');
            $table->integer('encourage_student_participation');
            $table->integer('enthusiasm');
            $table->integer('independent_thinking');
            $table->integer('diverse_points_of_view');
            $table->string('comment');
           
            $table->integer('course_id')->references('id')->on('courses');
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
        Schema::dropIfExists('student_engagements');
    }
}
