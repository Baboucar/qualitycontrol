@extends('layouts.app')
@section('content')
<div class="container">
        <h2>Feedback</h2>
        <form class="" action="{{ url('feedback') }}" method="POST"> {{ csrf_field() }}
            <div>
                The question ask about overall effectiveness as a university Lecturer I found this Lecturer:
                <p>
                    <input class="with-gap" name="lecturer_effectiveness" type="radio" id="excellent" value="excellent" required />
                    <label for="excellent">Excellent</label>
                </p>
                <p>
                    <input class="with-gap" name="lecturer_effectiveness" type="radio" id="good" value="good" required />
                    <label for="good">Good</label>
                </p>
                <p>
                    <input class="with-gap" name="lecturer_effectiveness" type="radio" id="satisfactory" value="satisfactory" required />
                    <label for="satisfactory">Satisfactory</label>
                </p>

                <p>
                    <input class="with-gap" name="lecturer_effectiveness" type="radio" id="weak" value="weak" requried />
                    <label for="weak">Weak</label>
                </p>

                <p>
                    <input class="with-gap" name="lecturer_effectiveness" type="radio" id="Ineffective" value="ineffective" required />
                    <label for="Ineffective">Ineffective</label>
                </p>

            </div>
            <br>
            <p>Note any comment made below shoild be free from <b> racist, sexist or personal
		         overtone text with abusive comments will be discarded
		         please provide critical and constructive comments
		       </b>
		    </p>

        <div class="row">
            <form class="col s12">

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" name="learning_improvement" required></textarea>
                        <label for="textarea1">What did the lecturer do to improve your learning</label>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea2" class="materialize-textarea" name="obstacles" required></textarea>
                        <label for="textarea2">What factors (if any) were within the control of the lecturer were obstacles to your learning</label>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea3" class="materialize-textarea" name="recommendation" required></textarea>
                        <label for="textarea3">What recommendation do you have to help the lecturer imporove your learning </label>
                    </div>
                </div>
                <br>
            <div class="">
                <label class="" for="title">In this course, I expect a grade of:</label>
                <input type="text" name="expected_result" list="grade" required>
                <datalist class="browser-default" id="grade">
                    <option value="" disabled selected>Select Course Name</option>
                    <option value="a">A</option>
                    <option value="b+">B+</option>
                    <option value="b">B</option>
                    
                    <option value="c+">C+</option>
                    <option value="c">C</option>
                   
                    <option value="d">D</option>
                    <option value="f">F</option>
                </datalist>
            </div>

            <br>

            <div>
                <p>For my degree this course is:</p>
                <p>
                    <input class="with-gap" name="degree_requirement" type="radio" id="compulsory" value="compulsory" required />
                    <label for="compulsory">Compulsory</label>
                </p>
                <p>
                    <input class="with-gap" name="degree_requirement" type="radio" id="elective" value="elective" required />
                    <label for="elective">Elective</label>
                </p>
                <p>
                    <input class="with-gap" name="degree_requirement" type="radio" id="notsure" value="not sure" required />
                    <label for="notsure">Not Sure</label>
                </p>



            </div>
            <br>
            <div>
                <p>What portion of the class delivered by the lecturer did you attend:</p>
                <p>
                    <input class="with-gap" name="student_attendance" type="radio" id="some" value="some" required />
                    <label for="some">Some</label>
                </p>
                <p>
                    <input class="with-gap" name="student_attendance" type="radio" id="most" value="most" required />
                    <label for="most">Most</label>
                </p>
                <p>
                    <input class="with-gap" name="student_attendance" type="radio" id="notsure1" value="not sure" required />
                    <label for="notsure1">Not Sure</label>
                </p>

            </div>

            <button class="btn waves-effect waves-light" type="submit" >Submit</button>
        </form>

    </div>
@endsection