@extends('app')

@section('content')

	<h3 align="center" >FERPA Quiz</h3>
	<h5 align="center">A passing score of 85% on the FERPA Quiz is required before access to student data is approved.<br> To request access to the FERPA tutorial and access the FERPA quiz can be done at <a href="http://myzoutraining.missouri.edu/ferpareq.php">here</a></h5>
	{!! Form::open() !!}
		<div class="form-group">
			<div class="row">
				<div class="col-md-4">
				{!! Form::label('name', 'Score:', ['align' => 'right']) !!}
				</div>
				<div class="col-md-4">	
				{!! Form::text('Score', null, ['class' => 'form-control', 'align' => 'center']) !!}	
				</div>
		</div> 
	{!! Form::close() !!}

@endsection