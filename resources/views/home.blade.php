@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					{!! Form::open(array('url' => '/testScore', 'method' => 'get')) !!}
						<div class="form-group">
							{!! Form::submit('Create Access Application', ['class' => 'btn btn-primary form-control']) !!}
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
