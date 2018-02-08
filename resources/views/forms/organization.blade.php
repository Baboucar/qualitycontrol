@extends('layouts.app')
@section('content')
<div class="container">
        <h2>Organization</h2>
        <form class="" method="POST" action="{{ url('organization') }}"> {{ csrf_field() }}

            <div>
                The Lecturer came well prepared for class.
                <p>
                    <input class="with-gap" name="well_prepared" type="radio" id="sagree" value="1" requried/>
                    <label for="sagree">Strongly Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="well_organized" type="radio" id="agree" value="2" requried/>
                    <label for="agree">Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="well_prepared" type="radio" id="neutral" value="3" requried/>
                    <label for="neutral">Neutral</label>
                </p>
                <p>
                    <input class="with-gap" name="well_prepared" type="radio" id="disagree" value="4" requried/>
                    <label for="disagree">Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="well_prepared" type="radio" id="sdisagree" value="5" requried/>
                    <label for="sdisagree">Strongly Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="well_prepared" type="radio" id="notapplicable" value="0" />
                    <label for="notapplicable">Not Applicable</label>
                </p>

            </div>
            <br>

            <div>
                The Lecturer class sessions were well organized.
                <p>
                    <input class="with-gap" name="well_organized" type="radio" id="sagree1" value="1" requried/>
                    <label for="sagree1">Strongly Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="well_organized" type="radio" id="agree1" value="2" requried/>
                    <label for="agree1">Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="well_organized" type="radio" id="neutral1" value="3" requried/>
                    <label for="neutral1">Neutral</label>
                </p>
                <p>
                    <input class="with-gap" name="well_organized" type="radio" id="disagree1" value="4" required/>
                    <label for="disagree1">Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="well_organized" type="radio" id="sdisagree1" value="5" required/>
                    <label for="sdisagree1">Strongly Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="well_organized" type="radio" id="notapplicable1" value="0" required/>
                    <label for="notapplicable1">Not Applicable</label>
                </p>

            </div>

            <br>
            <div>
                The Lecturer assessment requirements were made clear.
                <p>
                    <input class="with-gap" name="assessment_requirements" type="radio" id="sagree3" value="1" required/>
                    <label for="sagree3">Strongly Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="assessment_requirements" type="radio" id="agree3" value="2" required/>
                    <label for="agree3">Agree</label>
                </p>
                <p>
                    <input class="with-gap" name="assessment_requirements" type="radio" id="neutral3" value="3" required/>
                    <label for="neutral3">Neutral</label>
                </p>
                <p>
                    <input class="with-gap" name="assessment_requirements" type="radio" id="disagree3" value="4" required/>
                    <label for="disagree3">Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="assessment_requirements" type="radio" id="sdisagree3" value="5" required/>
                    <label for="sdisagree3">Strongly Disagree</label>
                </p>

                <p>
                    <input class="with-gap" name="assessment_requirements" type="radio" id="notapplicable3" value="0" required/>
                    <label for="notapplicable3">Not Applicable</label>
                </p>

            </div>

          
		        <div class="row">
		          <div class="input-field col s12">
		            <textarea id="textarea1" class="materialize-textarea" name="comment" value="" required></textarea>
		            <label for="textarea1">Comments</label>
		          </div>
		        </div>
            
            <button class="btn waves-effect waves-light" type="submit">Next</button>
        </form>

    </div>
@endsection
