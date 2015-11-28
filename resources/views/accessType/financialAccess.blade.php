@extends('app')

@section('content')

<div class="panel-heading"><h5>Student Financials(Cashiers) Access</h5></div>
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
    SF General Inquiry
  </div>
  <div class="col-md-4">
    For staff outside of the Cashiers Office
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('sfGen, 'view', false) !!}</center>
  </div>
  <div class="col-md-2">
    <!-- <center>{!! Form::checkbox('fACash[]', 'update', false) !!}</center> -->
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    SF Cash Group Post
  </div>
  <div class="col-md-4">
    Also known as "Cost Centers" (for areas that want to apply charges)
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('sfCash[]', 'view', false) !!}</center>
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('sfCash[]', 'update', false) !!}</center>
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