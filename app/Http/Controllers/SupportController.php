<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\SupportLearning;

class SupportController extends Controller {
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
        return view('forms.support');
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
            'constructive_feedback' => 'required',
            'student_work' => 'required',
            'individual_help' => 'required',
            'student_progress' => 'required',
            'work_quality' => 'required',
            'explanations' => 'required',
            'comment' => 'required|string'
        ]);

        if ($validator->fails()) {
            # code...
            //dd($request->all());
            return redirect('support');
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

        SupportLearning::create([
            'constructive_feedback' => $request->constructive_feedback,
            'student_work' => $request->student_work,
            'individual_help' => $request->individual_help,
            'student_progress' => $request->student_progress,
            'work_quality' => $request->work_quality,
            'explanations' => $request->explanations,
            'comment' => $request->comment,
            'course_id' => $id[0]
        ]);

        return redirect('feedback');
    }

    public function getChartData() {
        
        $course_id = session('course_id');

        $constructive_feedback_count_array = $this->getCounts(DB::select('select constructive_feedback from support_learnings  where course_id = ?', array($course_id)));
        $student_work_count_array = $this->getCounts(DB::select('select student_work from support_learnings  where course_id = ?', array($course_id)));
        $individual_help_count_array = $this->getCounts(DB::select('select individual_help from support_learnings  where course_id = ?', array($course_id)));
        $student_progress_count_array = $this->getCounts(DB::select('select student_progress from support_learnings  where course_id = ?', array($course_id)));
        $work_quality_count_array = $this->getCounts(DB::select('select work_quality from support_learnings  where course_id = ?', array($course_id)));
        $explanations_count_array = $this->getCounts(DB::select('select explanations from support_learnings  where course_id = ?', array($course_id)));

        array_unshift($constructive_feedback_count_array, 'Question 10');
        array_unshift($student_work_count_array, 'Question 11');
        array_unshift($individual_help_count_array, 'Question 12');
        array_unshift($student_progress_count_array, 'Question 13');
        array_unshift($work_quality_count_array, 'Question 14');
        array_unshift($explanations_count_array, 'Question 15');

        return json_encode(array($constructive_feedback_count_array, $student_work_count_array, $individual_help_count_array, $student_progress_count_array, $work_quality_count_array, $explanations_count_array));
    }
}
