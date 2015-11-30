@extends('app')

@section('content')

<div class="panel-heading"><h5>Student Financials Aid Access</h5></div>
<div class="panel-body">
{!! Form::open() !!}
<div class="row">
    <div class="col-md-8">

    </div>
    <div class="col-md-4">
      <center>Acess Type</center>
    </div>
</div>
<div class="row">
  <div class="col-md-4">
    Role
  </div>
  <div class="col-md-4">
    Role Description
  </div>
  <div class="col-md-2">
    <center>View</center>
  </div>
  <div class="col-md-2">
    <center>Update</center>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    FA Cash
  </div>
  <div class="col-md-4">
    View a student's financial aid awards and budget
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('fACash[]', 'cashView', false) !!}</center>
  </div>
  <div class="col-md-2">
    <!-- <center>{!! Form::checkbox('fACash', 'update', false) !!}</center> -->
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    FA Non Financial Aid Staff
  </div>
  <div class="col-md-4">
    Also known as "Cost Centers" (for areas that want to apply charges)
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('fACash[]', 'nonFinancialAidStaff', false) !!}</center>
  </div>
  <div class="col-md-2">
    <!-- <center>{!! Form::checkbox('fAnfas[]', 'update', false) !!}</center> -->
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    {!! Form::Submit('Next', ['class' => 'btn btn-primary form-control']) !!}
  </div>
</div>
{!! Form::close() !!}
</div>

@endsection
