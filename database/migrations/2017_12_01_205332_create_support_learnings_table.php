<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportLearningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_learnings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('constructive_feedback');
            $table->integer('student_work');
            $table->integer('individual_help');
            $table->integer('student_progress');
            $table->integer('work_quality');
            $table->integer('explanations');
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
        Schema::dropIfExists('support_learnings');
    }
}
