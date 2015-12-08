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
    <hr>
    <div class="row">
      <div class="col-md-4">Role</div>
      <div class="col-md-4">Role Description</div>
      <div class="col-md-2"><center>View</center></div>
      <div class="col-md-2"><center>Update</center></div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-4">SF General Inquiry</div>
      <div class="col-md-4">For staff outside of the Cashiers Office</div>
      <div class="col-md-2"><center>{!! Form::checkbox('sfCash[]', 'generalinview', false) !!}</center></div>
      <div class="col-md-2"></div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-4">SF Cash Group Post</div>
      <div class="col-md-4">Also known as "Cost Centers" (for areas that want to apply charges)</div>
      <div class="col-md-2"><center>{!! Form::checkbox('sfCash[]', 'cashgrpview', false) !!}</center></div>
      <div class="col-md-2"><center>{!! Form::checkbox('sfCash[]', 'cashgrpupdate', false) !!}</center></div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        {!! Form::Submit('Next', ['class' => 'btn btn-primary form-control']) !!}
      </div>
    </div>
    <br>
    <div class="row" >
        <div class="col-md-5 col-md-offset-1"> 
          <input type="submit" class="btn btn-success form-control" name="store" value="Save" >  
        </div>
        <div class="col-md-5"> 
          <input type="submit" class="btn btn-danger form-control" name="store" value="Cancel" >  
        </div>  
    </div>
  {!! Form::close() !!}
</div>

@endsection
