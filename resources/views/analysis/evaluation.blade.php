@extends('layouts.app')
@section('script')
 <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <!--  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script type="text/javascript" src="/js/charts.js"></script>
@endsection
@section('content')
	<div class="container">
	<form method="POST" action="{{url('analysis')}}"> {{ csrf_field() }}
		<div class="row">
		    <div class="input-field col s12">
		        <input type="text" id="textarea1" class="materialize-textarea" name="course" required/>
		        <label for="textarea1">Course</label>
		    </div>
		    <div class="col s2">
		    	<button class="btn waves-effect waves-light" type="submit">Run</button>
		    </div>
		</div>
	</form>


	</div>
@endsection