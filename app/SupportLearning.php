<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportLearning extends Model {
    //
    protected $table = 'support_learnings';
    protected $fillable = ['constructive_feedback', 'student_work', 'individual_help', 'student_progress', 'work_quality', 'explanations', 'comment', 'course_id'];

    public function courses() {
    	$this->belongsTo('App\Course')->withDefault();
    }

  
}
