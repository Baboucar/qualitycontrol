<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\StudentEngagement;

class EngagementController extends Controller
{
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
        return view('forms.engagement');
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
            'interest_stimulation' => 'required',
            'question_opportunities' => 'required',
            'encourage_student_participation' => 'required',
            'enthusiasm' => 'required',
            'independent_thinking' => 'required',
            'diverse_points_of_view' => 'required',
            'comment' => 'required|string'
        ]);

        if ($validator->fails()) {
            # code...
            dd('validator failed');
            return redirect('engagement');
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

        StudentEngagement::create([
            'interest_stimulation' => $request->interest_stimulation,
            'question_opportunities' => $request->question_opportunities,
            'encourage_student_participation' => $request->encourage_student_participation,
            'enthusiasm' => $request->enthusiasm,
            'independent_thinking' => $request->independent_thinking,
            'diverse_points_of_view' => $request->diverse_points_of_view,
            'comment' => $request->comment,
            'course_id' => $id[0]
        ]);

        return redirect('support');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getChartData() {
        
        $course_id = session('course_id');

        $interest_stimulation_count_array = $this->getCounts(DB::select('select interest_stimulation from student_engagements where course_id = ?', array($course_id)));
        $question_opportunities_count_array = $this->getCounts(DB::select('select question_opportunities from student_engagements where course_id = ?', array($course_id)));
        $encourage_student_participation_count_array = $this->getCounts(DB::select('select encourage_student_participation from student_engagements where course_id = ?', array($course_id)));
        $enthusiasm_count_array = $this->getCounts(DB::select('select enthusiasm from student_engagements where course_id = ?', array($course_id)));
        $independent_thinking_count_array = $this->getCounts(DB::select('select independent_thinking from student_engagements where course_id = ?', array($course_id)));
        $diverse_points_of_view_count_array = $this->getCounts(DB::select('select diverse_points_of_view from student_engagements where course_id = ?', array($course_id)));

        array_unshift($interest_stimulation_count_array, 'Question 4');
        array_unshift($question_opportunities_count_array, 'Question 5');
        array_unshift($encourage_student_participation_count_array, 'Question 6');
        array_unshift($enthusiasm_count_array, 'Question 7');
        array_unshift($independent_thinking_count_array, 'Question 8');
        array_unshift($diverse_points_of_view_count_array, 'Question 9');

        return json_encode(array($interest_stimulation_count_array, $question_opportunities_count_array, $encourage_student_participation_count_array, $enthusiasm_count_array, $independent_thinking_count_array, $diverse_points_of_view_count_array));
    }
}
