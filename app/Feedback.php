<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model {
    //
    protected $table = 'feedbacks';
    protected $fillable = ['lecturer_effectiveness', 'learning_improvement', 'obstacles', 'recommendation', 'expected_result', 'degree_requirement', 'student_attendance', 'course_id'];

    public function courses() {

    	$this->belongsTo('App\Course')->withDefault();
    }

  
}
