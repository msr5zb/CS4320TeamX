@extends('app')

@section('content')
<div class="panel-heading"><h5>Admission Access</h5></div>
<div class="panel-body">
	<h4 align="center">Would you like to request Admission Access?</h4>
		{!! Form::open() !!}
		<div class="form-group">
			<div class="row" >
				<div class="col-md-4 col-md-offset-2"> 
					<input type="submit" class="btn btn-success form-control" name="admissionPrompt" value="Yes" >	
				</div>
				<div class="col-md-4"> 
					<input type="submit" class="btn btn-danger form-control" name="admissionPrompt" value="No" >	
				</div>  
			</div>
		</div>
		{!! Form::close() !!}
</div>

@endsection