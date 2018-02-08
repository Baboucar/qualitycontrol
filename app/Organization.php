<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model {
    //
    protected $table = 'organizations';
    protected $fillable = ['well_prepared', 'well_organized', 'comment', 'assessment_requirements', 'course_id'];

    public function courses() {

    	$this->belongsTo('App\Course')->withDefault();
    }

  
}
