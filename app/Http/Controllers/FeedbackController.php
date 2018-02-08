<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Feedback;

class FeedbackController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('forms.feedback');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'lecturer_effectiveness' => 'required',
            'learning_improvement' => 'required|string',
            'obstacles' => 'required|string',
            'recommendation' => 'required|string',
            'expected_result' => 'required',
            'degree_requirement' => 'required',
            'student_attendance' => 'required'
        ]);

        if ($validator->fails()) {
            # code...
            return redirect('feedback');
        }

        //get the pk of the course record
        $title = session('title');
        $lecturer = session('lecturer');

        $course_entry = DB::table('courses')->where([
            ['title', '=', $title],
            ['lecturer', '=', $lecturer]
        ])->get();
        
        //get the id from the collection.
        
        $id = $course_entry->pluck('id');

        Feedback::create([
            'lecturer_effectiveness' => $request->lecturer_effectiveness,
            'learning_improvement' => $request->learning_improvement,
            'obstacles' => $request->obstacles,
            'recommendation' => $request->recommendation,
            'expected_result' => $request->expected_result,
            'degree_requirement' => $request->degree_requirement,
            'student_attendance' => $request->student_attendance,
            'course_id' => $id[0]
        ]);

        //flush out the session
        $request->session()->flush();

        //return to home
        return redirect('/');
    }

    public function getEffectivenessData() {

        $course_id = session('course_id');

        $effectiveness_count_array = $this->getEffectivenessCount(DB::select('select lecturer_effectiveness from feedbacks where course_id = ?', array($course_id)));

        
        return json_encode($effectiveness_count_array);
    }

    public function getGradeData() {
        $course_id = session('course_id');

        $grade_count_array = $this->getGradeCount(DB::select('select expected_result from feedbacks where course_id = ?', array($course_id)));

        return json_encode($grade_count_array);
    }

    public function getAttendanceData() {

        $course_id = session('course_id');

        $attendance_count_array = $this->getAttendanceCount(DB::select('select student_attendance from feedbacks where course_id = ?', array($course_id)));

        return json_encode($attendance_count_array);
    }

    public function getDegreeRequirementData() {
        $course_id = session('course_id');

        $degree_requirement_count_array = $this->getDegreeRequirementCount(DB::select('select degree_requirement from feedbacks where course_id = ?', array($course_id)));

        return json_encode($degree_requirement_count_array);
    }
}
