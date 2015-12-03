@extends('app')

@section('content')

<div class="panel-heading"><h5>Select the Academic Career(s)</h5></div>
<div class="panel-body">
{!! Form::open() !!}
<div class="form-group">
  <div class="row">
    <div class="col-md-3">
      {!! Form::checkbox('selectCareer[]', 'ugrd', false) !!} UGRD
    </div>
    <div class="col-md-2">
      {!! Form::checkbox('selectCareer[]', 'grad', false) !!} GRAD
    </div>
    <div class="col-md-2">
      {!! Form::checkbox('selectCareer[]', 'med', false) !!} MED
    </div>
    <div class="col-md-2">
      {!! Form::checkbox('selectCareer[]', 'vetmed', false) !!} VET MED
    </div>
    <div class="col-md-3">
      {!! Form::checkbox('selectCareer[]', 'law', false) !!} LAW
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      {!! Form::Submit('Next', ['class' => 'btn btn-primary form-control']) !!}
    </div>
  </div>
</div>
{!! Form::close() !!}
</div>

@endsection
