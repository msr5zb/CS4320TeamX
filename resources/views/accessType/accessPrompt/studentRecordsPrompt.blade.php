@extends('app')

@section('content')
<div class="panel-heading"><h3 class="centerInsides">Student Records Access</h3></div>
<div class="panel-body">
	<h4 align="center">Would you like to request Student Records Access?</h4>
		{!! Form::open() !!}
		<div class="form-group">
			<div class="row" >
				<div class="col-md-4"> 
					{!! Form::Submit('Yes', ['class' => 'btn btn-success form-control']) !!}	
				</div>
				<div class="col-md-4"> 
					{!! Form::Submit('No', ['class' => 'btn btn-danger form-control']) !!}	
				</div>  
			</div>
		</div>
		{!! Form::close() !!}
</div>

@endsection