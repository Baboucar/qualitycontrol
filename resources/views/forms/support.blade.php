@extends('layouts.app')
@section('content')
<div class="container">
        <h2>Supporting my learning</h2>
        <form class="" action="{{ url('support') }}" method="POST"> {{ csrf_field() }}

            <div>
                <p>The lecturer provided useful constructive feedback.</p>
                <p>
                    <input class="with-gap"  type="radio" id="sagree" name="constructive_feedback" required value="1" />
                    <label for="sagree">Strongly Agree</label>
                </p>
                <p>
                    <input class="with-gap"  type="radio" id="agree" name="constructive_feedback" required value="2" />
                    <label for="agree">Agree</label>
                </p>
                <p>
                    <input class="with-gap" type="radio" id="neutral" name="constructive_feedback" required value="3" />
                    <label for="neutral">Neutral</label>
                </p>
                <p>
                    <input class="with-gap"  type="radio" id="disagree" name="constructive_feedback" required value="4" />
                    <label for="disagree">Disagree</label>
                </p>

                <p>
                    <input class="with-gap"  type="radio" id="sdisagree" name="constructive_feedback" required value="5" />
                    <label for="sdisagree">Strongly Disagree</label>
                </p>

                <p>
                    <input class="with-gap"  type="radio" id="notapplicable" name="constructive_feedback" required value="0" />
                    <label for="notapplicable">Not Applicable</label>
                </p>

            </div>
            <br>

            <div>
                <p>The lecturer returned student work in a timely manner.</p>
                <p>
                    <input class="with-gap"  type="radio" id="sagree1" name="student_work" required value="1" />
                    <label for="sagree1">Strongly Agree</label>
                </p>
                <p>
                    <input class="with-gap"  type="radio" id="agree1" name="student_work" required value="2" />
                    <label for="agree1">Agree</label>
                </p>
                <p>
                    <input class="with-gap"  type="radio" id="neutral1" name="student_work" required value="3" />
                    <label for="neutral1">Neutral</label>
                </p>
                <p>
                    <input class="with-gap"  type="radio" id="disagree1" name="student_work" required value="4" />
                    <label for="disagree1">Disagree</label>
                </p>

                <p>
                    <input class="with-gap"  type="radio" id="sdisagree1" name="student_work" required value="5" />
                    <label for="sdisagree1">Strongly Disagree</label>
                </p>

                <p>
                    <input class="with-gap"  type="radio" id="notapplicable1" name="student_work" required value="0" />
                    <label for="notapplicable1">Not Applicable</label>
                </p>

            </div>

            <br>
            <div>
                <p>The lecturer seemed willing to offer individual help.</p>
                <p>
                    <input class="with-gap"  type="radio" id="sagree2" name="individual_help" required value="1" />
                    <label for="sagree2">Strongly Agree</label>
                </p>
                <p>
                    <input class="with-gap"  type="radio" id="agree2" name="individual_help" required value="2" />
                    <label for="agree2">Agree</label>
                </p>
                <p>
                    <input class="with-gap"  type="radio" id="neutral2" name="individual_help" required value="3" />
                    <label for="neutral2">Neutral</label>
                </p>
                <p>
                    <input class="with-gap"  type="radio" id="disagree2" name="individual_help" required value="4" />
                    <label for="disagree2">Disagree</label>
                </p>

                <p>
                    <input class="with-gap"  type="radio" id="sdisagree2" name="individual_help" required value="5" />
                    <label for="sdisagree2">Strongly Disagree</label>
                </p>

                <p>
                    <input class="with-gap" type="radio" id="notapplicable2" name="individual_help" required value="0" />
                    <label for="notapplicable2">Not Applicable</label>
                </p>

            </div>
            <br>

            <div>
                <p>The lecturer seemed sensitive to and concerned about my progress.</p>
                <p>
                    <input class="with-gap"  type="radio" id="sagree3" name="student_progress" required value="1" />
                    <label for="sagree3">Strongly Agree</label>
                </p>
                <p>
                    <input class="with-gap" type="radio" id="agree3" name="student_progress" required value="2" />
                    <label for="agree3">Agree</label>
                </p>
                <p>
                    <input class="with-gap" type="radio" id="neutral3" name="student_progress" required value="3" />
                    <label for="neutral3">Neutral</label>
                </p>
                <p>
                    <input class="with-gap" type="radio" id="disagree3" name="student_progress" required value="4" />
                    <label for="disagree3">Disagree</label>
                </p>

                <p>
                    <input class="with-gap" type="radio" id="sdisagree3" name="student_progress" required value="5" />
                    <label for="sdisagree3">Strongly Disagree</label>
                </p>

                <p>
                    <input class="with-gap" type="radio" id="notapplicable3" name="student_progress" required value="0" />
                    <label for="notapplicable3">Not Applicable</label>
                </p>

            </div>
            <br>
            <div>
                <p>The lecturer encouraged students to produce high quality work.</p>
                <p>
                    <input class="with-gap"  type="radio" id="sagree4" name="work_quality" required value="1" />
                    <label for="sagree4">Strongly Agree</label>
                </p>
                <p>
                    <input class="with-gap"  type="radio" id="agree4" name="work_quality" required value="2" />
                    <label for="agree4">Agree</label>
                </p>
                <p>
                    <input class="with-gap"  type="radio" id="neutral4" name="work_quality" required value="3" />
                    <label for="neutral4">Neutral</label>
                </p>
                <p>
                    <input class="with-gap" type="radio" id="disagree4" name="work_quality" required value="4" />
                    <label for="disagree4">Disagree</label>
                </p>

                <p>
                    <input class="with-gap" type="radio" id="sdisagree4" name="work_quality" required value="5" />
                    <label for="sdisagree4">Strongly Disagree</label>
                </p>

                <p>
                    <input class="with-gap" type="radio" id="notapplicable4" name="work_quality" required value="0" />
                    <label for="notapplicable4">Not Applicable</label>
                </p>

            </div>
            <br>
            <div>
                <p>The lecturer's explanations were clear.</p>
                <p>
                    <input class="with-gap" type="radio" id="sagree5" name="explanations" required value="1" />
                    <label for="sagree5">Strongly Agree</label>
                </p>
                <p>
                    <input class="with-gap" type="radio" id="agree5" name="explanations" required value="2" />
                    <label for="agree5">Agree</label>
                </p>
                <p>
                    <input class="with-gap" type="radio" id="neutral5" name="explanations" required value="3" />
                    <label for="neutral5">Neutral</label>
                </p>
                <p>
                    <input class="with-gap" type="radio" id="disagree5" name="explanations" required value="4" />
                    <label for="disagree5">Disagree</label>
                </p>

                <p>
                    <input class="with-gap" type="radio" id="sdisagree5" name="explanations" required value="5" />
                    <label for="sdisagree5">Strongly Disagree</label>
                </p>

                <p>
                    <input class="with-gap" type="radio" id="notapplicable5" name="explanations" required value="0" />
                    <label for="notapplicable5">Not Applicable</label>
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