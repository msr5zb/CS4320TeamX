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
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'immunizationView', false) !!}</center></div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'immunizationUpdate', false) !!}</center></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      Transfer Credit Admission
    </div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'transferCreditAdmissionView', false) !!}</center></div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'transferCreditAdmissionUpdate', false) !!}</center></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      Relationships
    </div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'relationshipsView', false) !!}</center></div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'relationshipsUpdate', false) !!}</center></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      Student Groups
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'studentGroupsUpdate', false) !!}</center></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      Accommodate(Student Health)
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'accommodateSHealthUpdate', false) !!}</center></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      Support Staff (Registrar's Office)
    </div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'supportStaffView', false) !!}</center></div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'supportStaffUpdate', false) !!}</center></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      Advance Standing Report
    </div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'advanceStandingReportView', false) !!}</center></div>
    <div class="col-md-2"><center>{!! Form::checkbox('accessReserved[]', 'advanceStandingReportUpdate', false) !!}</center></div>
  </div>
  <br><br>
  <div class="row" >
    <div class="col-md-5 col-md-offset-1"> 
      <input type="submit" class="btn btn-success form-control" name="store" value="Complete" >  
    </div>
    <div class="col-md-5"> 
      <input type="submit" class="btn btn-danger form-control" name="store" value="Cancel" >  
    </div>  
  </div>
  {!! Form::close() !!}
</div>

@endsection