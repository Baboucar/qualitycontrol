<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lecturer_effectiveness', 25);
            $table->string('learning_improvement', 100);
            $table->string('obstacles', 100);;
            $table->string('recommendation', 100);
            $table->char('expected_result', 4);
            $table->string('degree_requirement', 25);
            $table->string('student_attendance', 25);
          
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
        Schema::dropIfExists('feedbacks');
    }
}
