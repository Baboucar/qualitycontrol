@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <!-- <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> -->
                <p>Add some description of the questionnaire</p>
                <div class="row">
                    <div class="col-xs-3">
                        <a href="{{url('course')}}"><button class="btn btn-primary">Start</button></a>
                    </div>
                    <div class="col-xs-3 col-xs-offset-2">
                        <a href="{{url('analysis')}}"><button class="btn btn-primary">Analysis</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
