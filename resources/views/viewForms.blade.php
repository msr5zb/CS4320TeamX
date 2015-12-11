@extends('appLarge')

@section('content')
    
<!--Tutorial Section! -->    


<div class="panel-heading"><h1>Welcome, {{ Auth::user()->fname }} {{ Auth::user()->lname }}</h1></div>
    <div class="panel-body">
    
            
        
        @if (!count($requests)) 
            <h3>You Currently Have no Form Requests.</h3>
        @endif
        
        
        @if (count($requests)) 
            <h3>You Currently Have {{(count($requests))}}  Form Requests.</h3>
            <?php $formCounter = 1; ?>
              <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Please Select A Form!
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    @foreach ($requests as $request)
                  
                    <li><a href="#" onclick="javascript:showPreview(
                        '{{$request->requestId}}',
                        '{{$request->fname}}',
                        '{{$request->lname}}',
                        '{{$request->userSSO}}',
                        '{{$request->title}}',
                        '{{$request->employeeId}}',
                        '{{$request->address}}',
                        '{{$request->department}}',
                        '{{$request->phoneNum}}',
                        '{{$request->requestDescription}}',
                        '{{$request->ferpaScore}}',
                        
                        '{{$request->ugrd}}',
                        '{{$request->grad}}',
                        '{{$request->med}}',
                        '{{$request->vet_med}}',
                        '{{$request->law}}',
                        
                        '{{$request->basicInquiryView}}',
                        '{{$request->advancedInquiryView}}',
                        '{{$request->advancedInquiryUpdate}}',
                        '{{$request->threeCsView}}',
                        '{{$request->threeCsUpdate}}',
                        '{{$request->advisorUpdate}}',
                        '{{$request->departmentSOCUpdate}}',
                        '{{$request->serviceIndicatorsView}}',
                        '{{$request->serviceIndicatorsUpdate}}',
                        '{{$request->studentGroupView}}',
                        '{{$request->studyListView}}',
                        '{{$request->registerEnrollmentView}}',
                        '{{$request->registerEnrollmentUpdate}}',
                        '{{$request->advisorStudentCenterView}}',
                        '{{$request->classPermissionView}}',
                        '{{$request->classPermissionUpdate}}',
                        '{{$request->classRosterView}}',
                        '{{$request->blockEnrollmentsView}}',
                        '{{$request->blockEnrollmentsUpdate}}',
                        '{{$request->reportManagerView}}',
                        '{{$request->selfServiceAdvisorUpdate}}',
                        '{{$request->fiscalOfficerView}}',
                        '{{$request->acadmenicAdvisingProfileUpdate}}',
                        
                        
                        '{{$request->act}}',
                        '{{$request->sat}}',
                        '{{$request->gre}}',
                        '{{$request->gmat}}',
                        '{{$request->tofel}}',
                        '{{$request->ielts}}',
                        '{{$request->lsat}}',
                        '{{$request->mcat}}',
                        '{{$request->ap}}',
                        '{{$request->clep}}',
                        '{{$request->ged}}',
                        '{{$request->millers}}',
                        '{{$request->prax}}',
                        '{{$request->plamu}}',
                        '{{$request->base}}',
                        
                        '{{$request->generalInquiryView}}',
                        '{{$request->cashGroupPostView}}',
                        '{{$request->cashGroupPostUpdate}}',
                        
                        
                        '{{$request->cashView}}',
                        '{{$request->nonFinancialAidStaff}}',
                        
                        
                        '{{$request->immunizationView}}',
                        '{{$request->immunizationUpdate}}',
                        '{{$request->transferCreditAdmissionView}}',
                        '{{$request->transferCreditAdmissionUpdate}}',
                        '{{$request->relationshipsView}}',
                        '{{$request->relationshipsUpdate}}',
                        '{{$request->studentGroupsUpdate}}',
                        '{{$request->accommodateSHealthUpdate}}',
                        '{{$request->supportStaffView}}',
                        '{{$request->supportStaffUpdate}}',
                        '{{$request->advanceStandingReportView}}',
                        '{{$request->advanceStandingReportUpdate}}'
                        
                        
                        
                        )">Security Form <?php print($formCounter++); ?></a></li>
                    @endforeach   
                  </ul>

                 <!-- Note, Final PDF Format Not Finished -->
                 <button id="downloadPDFbutton" onclick="javascript:createPDF()" style="visibility: hidden;">Download PDF</button>
            </div>
        @endif
  
        <div id="previewPane" style="visibility: hidden;"><h1>Preview of Request Form:</h1>
        
            <div id="content"></div>
        
        </div>
    </div> 
@endsection
