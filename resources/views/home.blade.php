@extends('app')

@section('content')
<div class="panel-heading">Home</div>
<div class="panel-body">
	{!! Form::open(array('url' => '/testScore', 'method' => 'get')) !!}
	<div class="form-group">
		{!! Form::submit('Create Access Application', ['class' => 'btn btn-primary form-control']) !!}
	</div>
	{!! Form::close() !!}
</div>
@endsection
