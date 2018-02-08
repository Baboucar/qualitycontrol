<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {
    //
    protected $table = 'courses';
    protected $fillable = [ 'title', 'lecturer'];
    
    public function organizations() {
    	$this->hasMany('App\Oganization');
    }

    public function lecturers() {
    	$this->hasOne('App\Lecturer');
    }

    public function student_engagements() {
    	$this->hasMany('App\StudentEngagement');
    }

    public function support_learnings() {
    	$this->hasMany('App\SupportLearning');
    }

    public function feedbacks() {
    	$this->hasMany('App\Feedback');
    }

    //Accessors 
    public function getTitleAttribute($value) {
        return strtoupper($value);
    }

    public function getLecturerAttribute($value) {
        return strtoupper($value);
    }

    
}
