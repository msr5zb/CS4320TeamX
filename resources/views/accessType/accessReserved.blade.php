@extends('app')

@section('content')

<div class="panel-heading"><h5> Access</h5></div>
<div class="panel-body">
  {!! Form::open() !!}
  <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-4"><center>Acess Type</center></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      Role
    </div>
    <div class="col-md-2"><center>View</center></div>
    <div class="col-md-2"><center>Update</center></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      Immunization View
    </div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'immunizationview', false) !!}</center></div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'immunizationupate', false) !!}</center></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      Transfer Credit Admission
    </div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'tcaview', false) !!}</center></div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'tcaupate', false) !!}</center></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      Relationships
    </div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'relationshipsview', false) !!}</center></div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'relationshipsupate', false) !!}</center></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      Student Groups
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'studentgroupsupate', false) !!}</center></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      Accommodate(Student Health)
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'shealthupdate', false) !!}</center></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      Support Staff (Registrar's Office)
    </div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'regoffview', false) !!}</center></div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'regoffupdate', false) !!}</center></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      Advance Standing Report
    </div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'asrview', false) !!}</center></div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'asrupdate', false) !!}</center></div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-md-12">
      {!! Form::Submit('Next', ['class' => 'btn btn-primary form-control']) !!}
    </div>
  </div>
  {!! Form::close() !!}
</div>

@endsection