@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Lecturer Evaluation</h2>

        <form class="" method="POST" action="{{ url('course') }}"> {{ csrf_field() }}

            <div class="">
                <label class="">Select course</label>
                <input type="text" name="title" list="course">
                <datalist class="browser-default" id="course">
                    <option value="computer programming I cps101">Computer Programming I CPS101</option>
                    <option value="computer programming II cps102">Computer Programming II CPS102</option>
                    <option value="introduction to management mgt101">Introduction to Management MGT101</option>
                </datalist>

            </div>
            <br>
            <div>
                <label>Lecturer Name</label>
                <input type="text" name="lecturer" list="lecturer" required>
                <datalist class="browser-default" id="lecturer">
                    <option value="musa touray">Musa Touray</option>
                    <option value="malang jarju">Malang Jarju</option>
                    <option value="jacques boillat">Prof. Dr. Jacques Boillat</option>
                </datalist>
            </div>
            <br>
            <!-- <div>
                <input placeholder="Enter date" type="text" class="datepicker">
            </div> -->
            <br>
            <!-- <a class="btn waves-effect waves-light" name="action" href="{{url('organization')}}">Next</a> -->
            <button class="btn waves-effect waves-light" type="submit">Next</button>

        </form>

    </div>
@endsection 