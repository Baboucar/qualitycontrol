@extends('layouts.app')
@section('script')
 <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   	<!--  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script type="text/javascript" src="/js/charts.js"></script>
    
@endsection
@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class=" col s6">
			        <h5>Course: </h5>
			        <p>{{$course_object->getTitleAttribute($course_object->title)}}</p>
		    	</div>
		    	<div class="col s6">
		    		<h5>Lecturer</h5>
		    		<p>{{$course_object->getLecturerAttribute($course_object->lecturer)}}</p>
		    	</div>
			</div>
		</div>
		<!-- Charts -->
		<div class="row">
			<div class="col s12" style="width: 900px; height: 500px;" id="organization">
				
			</div>
			<div class="col s12" id="o_comments">
			<ul>
				@foreach ($organization_comments as $comment)
					<li>
						<blockquote>
							<p>{{$comment}}</p>
						</blockquote>
					</li>
				@endforeach
			</div>
			</ul>
		</div>

		<div class="row">
			<div class="col s12" style="width: 900px; height: 500px;" id="engagement">
				
			</div>
			<div class="col s12">
			<ul>
				@foreach ($engagement_comments as $comment)
					<li>
						<blockquote>
							<p>{{$comment}}</p>
						</blockquote>
					</li>
				@endforeach
			</div>
			</ul>
		</div>

		<div class="row">
			<div class="col s12" style="width: 900px; height: 500px;" id="support"></div>
			<div class="col s12">
				<ul>
					@foreach ($support_comments as $comment)
						<li>
							<blockquote>
								<p>{{$comment}}</p>
							</blockquote>
						</li>
					@endforeach
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col s12" id="effectiveness" style="width: 900px; height: 400px;"></div>
		</div>
		<br>
		<div class="row">
			<div class="col s12">
				<p>17. What did the lecturer do that improved your learning?</p>
			</div>
			<div class="col s12" id="q17">
				<ul>
					@foreach ($learning_improvements as $learning_improvement)
						<li>
							<blockquote>
								<p>{{$learning_improvement}}</p>
							</blockquote>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<p>18. What factors (if any) that were within the control of the lecturer were obstacles to your learning?</p>
			</div>
			<div class="col s12" id="q18">
				<ul>
					@foreach ($obstacles as $obstacle)
						<li>
							<blockquote>
								<p>{{$obstacle}}</p>
							</blockquote>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<p>19. What recommendation do you have to help this lecturer improve their learning?</p>
			</div>
			<div class="col s12" id="q19">
				<ul>
					@foreach ($recommendations as $recommendation)
						<li>
							<blockquote>
								<p>{{$recommendation}}</p>
							</blockquote>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col s12" id="grade" style="width: 900px; height: 400px;"></div>
		</div>
		<br>
		<div class="row">
			<div class="col s12" id="degree_requirement" style="width: 900px; height: 400px;"></div>
		</div>
		<br>
		<div class="row">
			<div class="col s12" id="attendance" style="width: 900px; height: 400px;"></div>
		</div>

		<div class="row">
			<div class="col s12">
				<a href="{{ url('analysis') }}"><button class="btn waves-effect waves-light">Return</button></a>
			</div>
		</div>
	</div>
@endsection