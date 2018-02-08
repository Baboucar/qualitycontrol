@extends('layouts.app')
@section('content')
<div class="container">
        <h2>Student Engagement</h2>
        <form class="" method="POST" action="{{ url('engagement') }}" > {{ csrf_field() }}

            <div>
                <p>The lecturer stimulated my interest in this course.</p> 
                <p>
                    <input class="with-gap" name="interest_stimulation" type="radio" id="sagree1" value="1" required/>
                    <label for="sagree1">Strongly Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="interest_stimulation" type="radio" id="agree1" value="2" required/>
                    <label for="agree1">Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="interest_stimulation" type="radio" id="neutral1" value="3" required/>
                    <label for="neutral1">Neutral</label>
                </p>
                <p>
                    <input class="with-gap" name="interest_stimulation" type="radio" id="disagree1" value="4" required/>
                    <label for="disagree1">Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="interest_stimulation" type="radio" id="sdisagree1" value="5" required/>
                    <label for="sdisagree1">Strongly Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="interest_stimulation" type="radio" id="notapplicable1" value="0" required/>
                    <label for="notapplicable1">Not Applicable</label>
                </p>

            </div>

            <div>
                <p>The Lecturer provided opportunities for students to ask questions.</p>
                <p>
                    <input class="with-gap" name="question_opportunities" type="radio" id="sagree2" value="1" required/>
                    <label for="sagree2">Strongly Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="question_opportunities" type="radio" id="agree2" value="2" required/>
                    <label for="agree2">Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="question_opportunities" type="radio" id="neutral2" value="3" required/>
                    <label for="neutral2">Neutral</label>
                </p>
                <p>
                    <input class="with-gap" name="question_opportunities" type="radio" id="disagree2" value="4" required/>
                    <label for="disagree2">Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="question_opportunities" type="radio" id="sdisagree2" value="5" required/>
                    <label for="sdisagree2">Strongly Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="question_opportunities" type="radio" id="notapplicable2" value="0" required/>
                    <label for="notapplicable2">Not Applicable</label>
                </p>

            </div>
            <br>

            <div>
                <p>The lecturer encouraged student participation.</p>
                <p>
                    <input class="with-gap" name="encourage_student_participation" type="radio" id="sagree3" value="1" required/>
                    <label for="sagree3">Strongly Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="encourage_student_participation" type="radio" id="agree3" value="2" required/>
                    <label for="agree3">Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="encourage_student_participation" type="radio" id="neutral3" value="3" required/>
                    <label for="neutral3">Neutral</label>
                </p>
                <p>
                    <input class="with-gap" name="encourage_student_participation" type="radio" id="disagree3" value="4" required/>
                    <label for="disagree3">Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="encourage_student_participation" type="radio" id="sdisagree3" value="5" required/>
                    <label for="sdisagree3">Strongly Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="encourage_student_participation" type="radio" id="notapplicable3" value="0" required/>
                    <label for="notapplicable3">Not Applicable</label>
                </p>

            </div>
            <br>

            <div>
                <p>The lecturer demonstrated an enthusiasm for teaching this course.</p>
                <p>
                    <input class="with-gap" name="enthusiasm" type="radio" id="sagree4" value="1" required/>
                    <label for="sagree4">Strongly Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="enthusiasm" type="radio" id="agree4" value="2" required/>
                    <label for="agree4">Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="enthusiasm" type="radio" id="neutral4" value="3" required/>
                    <label for="neutral4">Neutral</label>
                </p>
                <p>
                    <input class="with-gap" name="enthusiasm" type="radio" id="disagree4" value="4" required/>
                    <label for="disagree4">Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="enthusiasm" type="radio" id="sdisagree4" value="5" required/>
                    <label for="sdisagree4">Strongly Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="enthusiasm" type="radio" id="notapplicable4" value="0" required/>
                    <label for="notapplicable4">Not Applicable</label>
                </p>

            </div>
            <br>

            <div>
                <p>The lecturer encourage independent thinking.</p>
                <p>
                    <input class="with-gap" name="independent_thinking" type="radio" id="sagree5" value="1" required/>
                    <label for="sagree5">Strongly Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="independent_thinking" type="radio" id="agree5" value="2" required/>
                    <label for="agree5">Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="independent_thinking" type="radio" id="neutral5" value="3" required/>
                    <label for="neutral5">Neutral</label>
                </p>
                <p>
                    <input class="with-gap" name="independent_thinking" type="radio" id="disagree5" value="4" required/>
                    <label for="disagree5">Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="independent_thinking" type="radio" id="sdisagree5" value="5" required/>
                    <label for="sdisagree5">Strongly Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="independent_thinking" type="radio" id="notapplicable5" value="0" required/>
                    <label for="notapplicable5">Not Applicable</label>
                </p>

            </div>
            <br>

            <div>
                <p>The lecturer was open to diverse points of view.</p>
                <p>
                    <input class="with-gap" name="diverse_points_of_view" type="radio" id="sagree6" value="1" required/>
                    <label for="sagree6">Strongly Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="diverse_points_of_view" type="radio" id="agree6" value="2" required/>
                    <label for="agree6">Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="diverse_points_of_view" type="radio" id="neutral6" value="3" required/>
                    <label for="neutral6">Neutral</label>
                </p>
                <p>
                    <input class="with-gap" name="diverse_points_of_view" type="radio" id="disagree6" value="4" required/>
                    <label for="disagree6">Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="diverse_points_of_view" type="radio" id="sdisagree6" value="5" required/>
                    <label for="sdisagree6">Strongly Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="diverse_points_of_view" type="radio" id="notapplicable6" value="0" required/>
                    <label for="notapplicable6">Not Applicable</label>
                </p>

            </div>

              <div class="row">
		          <div class="input-field col s12">
		            <textarea id="textarea1" class="materialize-textarea" name="comment" required></textarea>
		            <label for="textarea1">Comments</label>
		          </div>
		        </div>
            <button class="btn waves-effect waves-light" type="submit">Next</button>
        </form>

    </div>
@endsection