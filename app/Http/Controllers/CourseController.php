<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Course;
use Illuminate\Support\Facades\Input;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('forms.course');
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
        //store the user entered values in the session
        $request->session()->put('title', $request->title);
        $request>session()->put('lecturer', $request->lecturer);
        if (Course::where('title', '=', Input::get('title'))->exists() &&  Course::where('lecturer', '=', Input::get('lecturer'))->exists()) {
            # code...
            return redirect('organization');
        }
        $validator = Validator::make($request->all(), [

            'title' => 'required|string',
            'lecturer' => 'required|string'
        ]);

        //check state of of validator
        if ($validator->fails()) {
            return redirect('course')->withErrors($validator)->withInput();
        }

        //validation passed
        Course::create([
            'title' => $request->title,
            'lecturer' => $request->lecturer
        ]);

        return redirect('organization');

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
}
