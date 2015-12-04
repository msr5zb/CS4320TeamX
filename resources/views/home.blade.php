@extends('app')

@section('content')

<!--Tutorial Section! -->


<div class="panel-heading"><h1>Welcome, {{ Auth::user()->fname }} {{ Auth::user()->lname }}</h1></div>
    <div class="panel-body">
        <div id="siteTutContainer">
            <img src="{{ asset('/images/siteTutorial.png') }}" id="siteTut" />
        </div>
        {!! Form::open(array('url' => '/updateTestScore', 'method' => 'get')) !!}
        <div class= "form-group">
          @if($showValue == "show")
            {!! Form::submit('Update FERPA Score', ['class' => 'btn btn-info form-control']) !!}
          @endif
        </div>
        {!! Form::close() !!}

        {!! Form::open(array('url' => '/testScore', 'method' => 'get')) !!}
        <div class="form-group">
            {!! Form::submit('Create Access Application', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
