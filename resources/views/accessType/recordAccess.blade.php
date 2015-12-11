@extends('app')

@section('content')

<div class="panel-heading"><h5>Student Financials(Cashiers) Access</h5></div>
<div class="panel-body">
{!! Form::open() !!}
<div class="row">
    <div class="col-md-8">

    </div>
    <div class="col-md-4">
      <center>Access Type</center>
    </div>
</div>
<hr>
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
<hr>
<div class="row">
  <div class="col-md-4">
    Basic Inquiry
  </div>
  <div class="col-md-4">
    Access to basic bio demo and student data: names, address, FERPA directory data, photos, term info, degree information, programs, honors and awards, service indicators (holds) and previous schools.
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'basicInquiryView', false) !!}</center>
  </div>
  <div class="col-md-2">
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    Advanced Inquiry
  </div>
  <div class="col-md-4">
    Includes Basic Inquiry access. Additionally includes relations with institution, citizenship, visa, decedant data, student enrollment, gpa, term history, 3C's, advisors, student groups
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'advancedInquiryView', false) !!}</center>
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'advancedInquiryUpdate', false) !!}</center>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    3Cs
  </div>
  <div class="col-md-4">
    Checklists, Comments, Communications
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'threeCsView', false) !!}</center>
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'threeCsUpdate', false) !!}</center>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    Advisor Update
  </div>
  <div class="col-md-4">
    Adding an advisor to a student's record
  </div>
  <div class="col-md-2">
  </div>
  <div class="col-md-2">
      <center>{!! Form::checkbox('recordAccess[]', 'advisorUpdate', false) !!}</center>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    Department SOC Update
  </div>
  <div class="col-md-4">
    Scheduling courses, assigning faculty to course, generating permission numbers
  </div>
  <div class="col-md-2">
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'departmentSOCUpdate', false) !!}</center>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    Service Indicators (Holds)
  </div>
  <div class="col-md-4">
    Administrative users with proper security can assign or remove service indicators from a student's record
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'serviceIndicatorsView', false) !!}</center>
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'serviceIndicatorsUpdate', false) !!}</center>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    Student Group View
  </div>
  <div class="col-md-4">
    View groups a student is associated with
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'studentGroupView', false) !!}</center>
  </div>
  <div class="col-md-2">
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    View Study List
  </div>
  <div class="col-md-4">
    View a student's class schedule
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'studyListView', false) !!}</center>
  </div>
  <div class="col-md-2">
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    Registrar Enrollment
  </div>
  <div class="col-md-4">
    Adding and dropping a course utilizing Enrollment Request
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'registerEnrollmentView', false) !!}</center>
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'registerEnrollmentUpdate', false) !!}</center>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    Advisor Student Center
  </div>
  <div class="col-md-4">
    Access to students study list, advisor, program/plan, demographic data, e-mail address
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'advisorStudentCenterView', false) !!}</center>
  </div>
  <div class="col-md-2">
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    Class Permission
  </div>
  <div class="col-md-4">
    Creating general or student specific class permission numbers
  </div>
  <div class="col-md-2">
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'classPermissionUpdate', false) !!}</center>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    Class Permission View
  </div>
  <div class="col-md-4">
    View class permission numbers which have been created for a course
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'classPermissionView', false) !!}</center>
  </div>
  <div class="col-md-2">
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    Class Roster
  </div>
  <div class="col-md-4">
    View students enrolled, dropped or withdrawn in a course
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'classRosterView', false) !!}</center>
  </div>
  <div class="col-md-2"></div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    Block Enrollments
  </div>
  <div class="col-md-4">
    Adding and dropping a course utilizing Enrollment Request
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'blockEnrollmentsView', false) !!}</center>
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'blockEnrollmentsUpdate', false) !!}</center>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    Report Manager
  </div>
  <div class="col-md-4">
    Assists in running various reports
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'reportManagerView', false) !!}</center>
  </div>
  <div class="col-md-2">
    <!-- <center>{!! Form::checkbox('blockEnroll[]', 'update', false) !!}</center> -->
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    Self Service Advisor
  </div>
  <div class="col-md-4">
    View Advisee photo, addresses, service indicators, emergency contacts, telephone numbers, grades, class schedule, enrollment appointment, print academic advising profile
  </div>
  <div class="col-md-2">
    <!-- <center>{!! Form::checkbox('reportManager', 'view', false) !!}</center> -->
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'selfServiceAdvisorUpdate', false) !!}</center>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    Fiscal Officer
  </div>
  <div class="col-md-4">
    View enrollment summary, term statistics, and UM term statistics
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('recordAccess[]', 'fiscalOfficerView',  false) !!}</center>
  </div>
  <div class="col-md-2">
    <!-- <center>{!! Form::checkbox('selfServiceAdvisor', 'update', false) !!}</center> -->
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    Academic Advising Profile
  </div>
  <div class="col-md-4">
    Allows printing of the Academic Advising Profile
  </div>
  <div class="col-md-2">
    <!-- <center>{!! Form::checkbox('acdAdvProfile', 'view', false) !!}</center> -->
  </div>
  <div class="col-md-2">
    <center>{!! Form::checkbox('acadmenicAdvisingProfileUpdate', false) !!}</center>
  </div>
</div>
<hr>
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
