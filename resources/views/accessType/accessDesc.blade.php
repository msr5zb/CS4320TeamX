@extends('app')

@section('content')
<div class="panel-heading"><h5>Access Type Description</h5></div>
<div class="panel-body">
	<h4 align="center">Please describe the type of access needed(i.e. view student name, address, rosters, etc.). Please be specific:</h4>
		{!! Form::open() !!}
		<div class="form-group">
			<div class="row" >
				<div class="col-md-12"> 
					{!! Form::textarea('accessDescription', null, ['class' => 'form-control typeDesc', 'id' => 'textarea']) !!}	
				</div>
			</div>
			<div id="textarea_feedback"></div>
			<br>
			{!! Form::Submit('Next', ['class' => 'btn btn-primary form-control']) !!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection