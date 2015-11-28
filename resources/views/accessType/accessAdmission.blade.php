@extends('app')

@section('content')

<div class="panel-heading"><h5>Admissions Access</h5></div>
<div class="panel-body">
{!! Form::open() !!}
<div class="form-group">
  <div class="row">
    <div class="col-md-8">
      Check with test(s) access is to granted
    </div>
    <div class="c0l-md-3">
      {!! Form::checkbox('selectAll', 'selectAll', false, ['id' => 'selectAll']) !!} Access to ALL test scores
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">{!! Form::checkbox('adAccess[]', 'act', false, ['class' => 'adAccessBoxes'])!!} ACT </div>
    <div class="col-md-2">{!! Form::checkbox('adAccess[]', 'sat', false, ['class' => 'adAccessBoxes'])!!} SAT </div>
    <div class="col-md-2">{!! Form::checkbox('adAccess[]', 'gre', false, ['class' => 'adAccessBoxes'])!!} GRE </div>
    <div class="col-md-2">{!! Form::checkbox('adAccess[]', 'gmat', false, ['class' => 'adAccessBoxes'])!!} GMAT </div>
    <div class="col-md-3">{!! Form::checkbox('adAccess[]', 'tofel', false, ['class' => 'adAccessBoxes'])!!} TOEFL </div>
  </div>
  <div class="row">
    <div class="col-md-3">{!! Form::checkbox('adAccess[]', 'ielts', false, ['class' => 'adAccessBoxes'])!!} IELTS </div>
    <div class="col-md-2">{!! Form::checkbox('adAccess[]', 'lsat', false, ['class' => 'adAccessBoxes'])!!} LSAT </div>
    <div class="col-md-2">{!! Form::checkbox('adAccess[]', 'mcat', false, ['class' => 'adAccessBoxes'])!!} MCAT </div>
    <div class="col-md-2">{!! Form::checkbox('adAccess[]', 'ap', false, ['class' => 'adAccessBoxes'])!!} AP </div>
    <div class="col-md-3">{!! Form::checkbox('adAccess[]', 'clep', false, ['class' => 'adAccessBoxes'])!!} CLEP </div>
  </div>
  <div class="row">
    <div class="col-md-3">{!! Form::checkbox('adAccess[]', 'ged', false, ['class' => 'adAccessBoxes'])!!} GED </div>
    <div class="col-md-2">{!! Form::checkbox('adAccess[]', 'millers', false, ['class' => 'adAccessBoxes'])!!} MILLERS </div>
    <div class="col-md-2">{!! Form::checkbox('adAccess[]', 'prax', false, ['class' => 'adAccessBoxes'])!!} PRAX </div>
    <div class="col-md-2">{!! Form::checkbox('adAccess[]', 'plamu', false, ['class' => 'adAccessBoxes'])!!} PLA-MU</div>
    <div class="col-md-3">{!! Form::checkbox('adAccess[]', 'base', false, ['class' => 'adAccessBoxes'])!!} BASE </div>
  </div>
</div>
{!! Form::close() !!}
</div>
@endsection
