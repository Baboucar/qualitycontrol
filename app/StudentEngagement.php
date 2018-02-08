<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentEngagement extends Model {
    //
    protected $table = 'student_engagements';
    protected $fillable = ['interest_stimulation', 'question_opportunities', 'encourage_student_participation', 'enthusiasm', 'independent_thinking', 'diverse_points_of_view', 'comment', 'course_id'];

    public function courses() {
    	$this->belongsTo('App\Course')->withDefault();
    }

    
}
