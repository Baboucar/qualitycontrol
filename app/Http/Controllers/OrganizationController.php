<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;
use Illuminate\Support\Facades\Validator;
use DB;

class OrganizationController extends Controller {

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('forms.organization');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
        $validator = Validator::make($request->all(), [
            'well_prepared' => 'required',
            'well_organized' => 'required',
            'assessment_requirements' => 'required',
            'comment' => 'required|string',
            //'course_id' => 'required'
        ]);

        if ($validator->fails()) {
            # code...
            return redirect('organization');
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
       
        Organization::create([
            'well_prepared' => $request->well_prepared,
            'well_organized' => $request->well_organized,
            'assessment_requirements' => $request->assessment_requirements,
            'comment' => $request->comment,
            'course_id' => $id[0]
        ]);

        return redirect('engagement');
    }

    public function getChartData() {
        
        $course_id = session('course_id');

        $well_prepared_count_array = $this->getCounts(DB::select('select well_prepared from organizations where course_id = ?', array($course_id)));
        $well_organized_count_array = $this->getCounts(DB::select('select well_organized from organizations where course_id = ?', array($course_id)));
        $assessment_requirements_count_array = $this->getCounts(DB::select('select assessment_requirements from organizations where course_id = ?', array($course_id)));
        array_unshift($well_prepared_count_array, 'Question 1');
        array_unshift($well_organized_count_array, 'Question 2');
        array_unshift($assessment_requirements_count_array, 'Question 3');

        return json_encode(array($well_prepared_count_array, $well_organized_count_array, $assessment_requirements_count_array));
    }
}
