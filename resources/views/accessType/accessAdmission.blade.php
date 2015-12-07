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
    <div class="col-md-4">
      {!! Form::checkbox('admissionsAccess[]', 'selectAll', false, ['id' => 'selectAll']) !!} Access to ALL test scores
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">{!! Form::checkbox('admissionsAccess[]', 'act', false, ['class' => 'adAccessBoxes'])!!} ACT </div>
    <div class="col-md-2">{!! Form::checkbox('admissionsAccess[]', 'sat', false, ['class' => 'adAccessBoxes'])!!} SAT </div>
    <div class="col-md-2">{!! Form::checkbox('admissionsAccess[]', 'gre', false, ['class' => 'adAccessBoxes'])!!} GRE </div>
    <div class="col-md-2">{!! Form::checkbox('admissionsAccess[]', 'gmat', false, ['class' => 'adAccessBoxes'])!!} GMAT </div>
    <div class="col-md-3">{!! Form::checkbox('admissionsAccess[]', 'tofel', false, ['class' => 'adAccessBoxes'])!!} TOEFL </div>
  </div>
  <div class="row">
    <div class="col-md-3">{!! Form::checkbox('admissionsAccess[]', 'ielts', false, ['class' => 'adAccessBoxes'])!!} IELTS </div>
    <div class="col-md-2">{!! Form::checkbox('admissionsAccess[]', 'lsat', false, ['class' => 'adAccessBoxes'])!!} LSAT </div>
    <div class="col-md-2">{!! Form::checkbox('admissionsAccess[]', 'mcat', false, ['class' => 'adAccessBoxes'])!!} MCAT </div>
    <div class="col-md-2">{!! Form::checkbox('admissionsAccess[]', 'ap', false, ['class' => 'adAccessBoxes'])!!} AP </div>
    <div class="col-md-3">{!! Form::checkbox('admissionsAccess[]', 'clep', false, ['class' => 'adAccessBoxes'])!!} CLEP </div>
  </div>
  <div class="row">
    <div class="col-md-3">{!! Form::checkbox('admissionsAccess[]', 'ged', false, ['class' => 'adAccessBoxes'])!!} GED </div>
    <div class="col-md-2">{!! Form::checkbox('admissionsAccess[]', 'millers', false, ['class' => 'adAccessBoxes'])!!} MILLERS </div>
    <div class="col-md-2">{!! Form::checkbox('admissionsAccess[]', 'prax', false, ['class' => 'adAccessBoxes'])!!} PRAX </div>
    <div class="col-md-2">{!! Form::checkbox('admissionsAccess[]', 'plamu', false, ['class' => 'adAccessBoxes'])!!} PLA-MU</div>
    <div class="col-md-3">{!! Form::checkbox('admissionsAccess[]', 'base', false, ['class' => 'adAccessBoxes'])!!} BASE </div>
  </div>
  <hr><br>
   <div class="row">
    <div class="col-md-8 col-md-offset-2">
      {!! Form::Submit('Next', ['class' => 'btn btn-primary form-control']) !!}
    </div>
  </div>
  <br>
  <div class="row" >
        <div class="col-md-4 col-md-offset-2"> 
          <input type="submit" class="btn btn-success form-control" name="store" value="Save" >  
        </div>
        <div class="col-md-4"> 
          <input type="submit" class="btn btn-danger form-control" name="store" value="Cancel" >  
        </div>  
  </div>
</div>
{!! Form::close() !!}
</div>
@endsection
