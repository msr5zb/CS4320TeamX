@extends('app')

@section('content')

<div class="panel-heading"><h5>Select the Academic Career(s)</h5></div>
<div class="panel-body">
{!! Form::open() !!}
<div class="form-group">
  <div class="row">
    <div class="col-md-3">
      {!! Form::radio('selCareer', 'ugrd', false) !!} UGRD
    </div>
    <div class="col-md-2">
      {!! Form::radio('selCareer', 'grad', false) !!} GRAD
    </div>
    <div class="col-md-2">
      {!! Form::radio('selCareer', 'med', false) !!} MED
    </div>
    <div class="col-md-2">
      {!! Form::radio('selCareer', 'vetMed', false) !!} VET MED
    </div>
    <div class="col-md-3">
      {!! Form::radio('selCareer', 'law', false) !!} LAW
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      {!! Form::Submit('Next', ['class' => 'btn btn-primary form-control']) !!}
    </div>
  </div>
</div>
{!! Form::close() !!}
</div>

@endsection
