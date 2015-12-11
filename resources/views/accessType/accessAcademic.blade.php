@extends('app')

@section('content')

<div class="panel-heading"><h5>Select the Academic Career(s)</h5></div>
<div class="panel-body">
{!! Form::open() !!}
<div class="form-group">
  <div class="row">
    <div class="col-md-2 col-md-offset-1">
      {!! Form::checkbox('selectCareer[]', 'ugrd', false) !!} UGRD
    </div>
    <div class="col-md-2">
      {!! Form::checkbox('selectCareer[]', 'grad', false) !!} GRAD
    </div>
    <div class="col-md-2">
      {!! Form::checkbox('selectCareer[]', 'med', false) !!} MED
    </div>
    <div class="col-md-2">
      {!! Form::checkbox('selectCareer[]', 'vet_med', false) !!} VET MED
    </div>
    <div class="col-md-2">
      {!! Form::checkbox('selectCareer[]', 'law', false) !!} LAW
    </div>
  </div>
  <hr>
  <br>
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
{!! Form::close() !!}
</div>

@endsection
