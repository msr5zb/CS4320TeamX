@extends('app')

@section('content')

<div class="panel-heading"><h5>Update FERPA Score</h5></div>
    <div class="panel-body">
        <h5>A passing score of 85% on the FERPA Quiz is required before access to student data is approved.<br> To request access to the FERPA tutorial and access the FERPA quiz can be done at <a href="http://myzoutraining.missouri.edu/ferpareq.php">here</a></h5>
            {!! Form::open() !!}
                <div class="form-group centerInsides">
                    {!! Form::label('Score', 'Score:', ['class' => 'score']) !!}
                    {!! Form::text('Score', null) !!}
                    <br>
                    {!! Form::Submit('Next', ['class' => 'btn btn-primary form-control']) !!}
                </div>
            {!! Form::close() !!}
    </div>
@endsection
