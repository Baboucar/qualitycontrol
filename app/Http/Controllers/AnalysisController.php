<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Course;
use Session;

class AnalysisController extends Controller {

  
    public function __construct() {

    }

    //get the view
    public function index() {
        
        return view('analysis.evaluation');
    }

   //
    public function getCourse(Request $request) {
        $course = $request->course;
        $listed = DB::table('courses')->where('title', $course)->get();
        //dd($listed);
        if ($listed->isNotEmpty()) {
            # code...
            Session::flush();
            //get the course id and store in session
            $course_id = DB::table('courses')->where('title', $course)->value('id');
            $request->session()->put('course_id', $course_id);

            $course_object = Course::where('id', '=', $course_id)->first();
            //dd($course_object);

            //get organization comments
            $organization_comments = DB::table('organizations')->where('course_id', $course_id)->pluck('comment');
            $engagement_comments = DB::table('student_engagements')->where('course_id', $course_id)->pluck('comment');
            $support_comments = DB::table('support_learnings')->where('course_id', $course_id)->pluck('comment');

            $learning_improvements = DB::table('feedbacks')->where('course_id', $course_id)->pluck('learning_improvement');
            $obstacles = DB::table('feedbacks')->where('course_id', $course_id)->pluck('obstacles');
            $recommendations = DB::table('feedbacks')->where('course_id', $course_id)->pluck('recommendation');
            //dd($organization_comments);

            return view('analysis.analysis', compact('course_object', 'organization_comments', 'engagement_comments', 'support_comments', 'learning_improvements', 'obstacles', 'recommendations'));
        } 

        return redirect()->back();
        
    }


}
