        function showPreview(
        $requestId,
        $fname,
        $lname,
        $userSSO,
        $title,
        $employeeId,
        $address,
        $department,
        $phoneNum,
        $requestDescription,
        $ferpaScore,
        
        $ugrd,
        $grad,
        $med,
        $vet_med,
        $law,
            
        $basicInquiryView,
        $advancedInquiryView,
        $advancedInquiryUpdate,
        $threeCsView,
        $threeCsUpdate,
        $advisorUpdate,
        $departmentSOCUpdate,
        $serviceIndicatorsView,
        $serviceIndicatorsUpdate,
        $studentGroupView,
        $studyListView,
        $registerEnrollmentView,
        $registerEnrollmentUpdate,
        $advisorStudentCenterView,
        $classPermissionView,
        $classPermissionUpdate,
        $classRosterView,
        $blockEnrollmentsView,
        $blockEnrollmentsUpdate,
        $reportManagerView,
        $selfServiceAdvisorUpdate,
        $fiscalOfficerView,
        $acadmenicAdvisingProfileUpdate,
        
        $act,
        $sat,
        $gre,
        $gmat,
        $tofel,
        $ielts,
        $lsat,
        $mcat,
        $ap,
        $clep,
        $ged,
        $millers,
        $prax,
        $plamu,
        $base,
        
        $generalInquiryView,
        $cashGroupPostView,
        $cashGroupPostUpdate,
        
        $cashView,
        $nonFinancialAidStaff,
        
        $immunizationView,
        $immunizationUpdate,
        $transferCreditAdmissionView,
        $transferCreditAdmissionUpdate,
        $relationshipsView,
        $relationshipsUpdate,
        $studentGroupsUpdate,
        $accommodateSHealthUpdate,
        $supportStaffView,
        $supportStaffUpdate,
        $advanceStandingReportView,
        $advanceStandingReportUpdate

) {
            
          
            //Parsers....  
            var careers = '';
            if($ugrd == '1')
                careers = careers.concat('UGRD ');
            if($grad == '1')
                careers = careers.concat('GRAD ');
            if($med == '1')
                careers = careers.concat('MED ');
            if($vet_med == '1')
                careers = careers.concat('VET-MED ');
            if($law == '1')
                careers = careers.concat('LAW ');
           
            var admissions = '';
            if($sat == '1')
                admissions = admissions.concat('SAT ');
            if($gre == '1')
                admissions = admissions.concat('GRE ');
            if($gmat == '1')
                admissions = admissions.concat('GMAT ');
            if($tofel == '1')
                admissions = admissions.concat('TOFEL ');
            if($ielts == '1')
                admissions = admissions.concat('IELTS ');
            if($lsat == '1')
                admissions = admissions.concat('LSAT ');
            if($mcat == '1')
                admissions = admissions.concat('MCAT ');
            if($ap == '1')
                admissions = admissions.concat('AP ');
            if($clep == '1')
                admissions = admissions.concat('CLEP ');
            if($ged == '1')
                admissions = admissions.concat('GED ');
            if($millers == '1')
                admissions = admissions.concat('MILLERS ');
            if($prax == '1')
                admissions = admissions.concat('PRAX ');           
            if($plamu == '1')
                admissions = admissions.concat('PLAMU ');
            if($base == '1')
                admissions = admissions.concat('BASE ');          
           
              
            
            
            
            
            
            
            
            
            
            
            
            function convertMeTrueFalse(a)
             {
               if(a == '1')
                   return 'X';
                else
                    return '';
             }
            
            document.getElementById("previewPane").style.visibility = "visible";
            document.getElementById("downloadPDFbutton").style.visibility = "visible";
            
            $("#content").html(''
            + '<div class="container" style="width:80%;">'
            + '<h2>Security Request Form</h2>'
            + '<p><strong>* indicates required field</strong></p>'
            + ''                   
            + '<h4>Basic Information</h4>'
            + '<div id="basicinfo" style="padding:10px">'
            + '<form class="form-inline" role="form">'
            + '<div class="form-group">'
            + '<label for="usr">* Name:</label>'
            + $fname + ' ' + $lname
            + '</div>'
            + '<div class="form-group">'
            + '<label for="pwprt">* PawPrint/SSO:</label>'
            + $userSSO 
            + '</div>'
            + '<div class="form-group">'
            + '<label for="title">* Title:</label>'
            + $title 
            + '</div>'
            + '<div class="form-group">'
            + '<label for="dept">* Department:'
            + $department
            + '</label>'
            + '</div>'
            + '<div class="form-group">'
            + '<label for="empID">* Employee ID:</label>'
            + $employeeId
            + '</div>'
            + '<div class="form-group">'
            + '<label for="cpaddr">* Campus Address:</label>'
            + $address 
            + '</div>'
            + '<div class="form-inline">'
            + '<label for="phnum">* Phone Number:'
            + $phoneNum
            + '</label>'
            + '</div>'
            + '</form>'
            + '</div>'
            + ''
            + '<h4>Request Information</h4>'
            + '<div id="reqinfo" style="padding:10px">'
            + '<div class="panel" id="reqtype">'
            + '<p>Request Type:   <i>New Request</i></p> '
            + '</div>'
            + '<form role="form">'
            + '<div class="form-group" style="padding:25">'
            + '<p style="padding-top:10px">* Please describe the type of access needed (i.e. view student name, address, rosters, etc.). Please be specific.</p>'
            + $requestDescription
            + '</div>'
            + '</form>'
            + '</div>'
            + ''
            + '<h4>FERPA Score</h4>'
            + '<div id="ferpa" style="padding:10px">'
            + '<div>'
            + '<p style="padding-right:25px">A passing score of 85% on the FERPA Quiz is required before access to student data is approved. Access to the FERPA tutorial and the FERPA quiz can be done at <link>http://myzoutraining.missouri.edu/ferpareq.php</link>.</p>'
            + '</div>'
            + '<div class="form-inline">'
            + '<label for="usr">* FERPA Score: </label><i>' + $ferpaScore + '</i>'
            + '</div>'
            + '</div>'
            + ''
            + '<h4>Academic Careers</h4>'
            + '<div id="acadcar" style="padding:10px">'
            + '<div>'
            + '<p style="padding-bottom:10px">* Select the Academic Carrer(s). Please check all that apply.</p>'
            + '<form role="form" style="padding-bottom:10px" style="padding:10px">'
            + '<i>' + careers + '</i>'
            + '</form>'
            + '</div>'
            + '</div>'
            + '<h4>Student Records Access</h4>'
            + '<div id="sturecords" style="padding:10px">'
            + '<table style="width:100%">'
            + '<tr>'
            + '<th>Role</th>'
            + '<th>Role Description</th>'
            + '<th>View</th>'
            + '<th>Update</th>'
            + '</tr>'
            + '<tr>'
            + '<td>Basic Inquiry</td>'
            + '<td>Access to basic bio demo and student data: names, address, FERPA directory data, photos, term info, degree information, programs, honors and awards, service indicators (holds) and previous schools.</td>'
            + '<td><b>' + convertMeTrueFalse($basicInquiryView) + '</b></td> '
            + '<td bgcolor="gainsboro"></td>'
            + '</tr>'
            + '<tr>'
            + '<td>Advanced Inquiry</td>'
            + '<td>Includes Basic Inquiry access. Additionally includes relations with institution, citizenship, visa, decedant data, student enrollment, gpa, term history, 3C\'s, advisors, student groups</td>'
            + '<td><b>' + convertMeTrueFalse($advancedInquiryView) + '</b></td> '
            + '<td><b>' + convertMeTrueFalse($advancedInquiryUpdate) + '</b></td>'
            + '</tr>'
            + '<tr>'
            + '<td>3Cs</td> '
            + '<td>Checklists, Comments, Communications</td> '
            + '<td><b>' + convertMeTrueFalse($threeCsView) + '</b></td>'
            + '<td><b>' + convertMeTrueFalse($threeCsUpdate) + '</b></td>'
            + '</tr>'
            + '<tr>'
            + '<td>Advisor Update</td> '
            + '<td>Adding an advisor to a student\'s record</td>   '
            + '<td bgcolor="gainsboro"></td> '
            + '<td><b>' + convertMeTrueFalse($advisorUpdate) + '</b></td>'
            + '</tr>'
            + '<tr>'
            + '<td>Department SOC Update</td> '
            + '<td>Scheduling courses, assigning faculty to course, generating permission numbers</td>  '
            + '<td bgcolor="gainsboro"></td>'
            + '<td><b>' + convertMeTrueFalse($departmentSOCUpdate) + '</b></td>'
            + '</tr>'
            + '<tr>'
            + '<td>Service Indicators (Holds)</td> '
            + '<td>Administrative users with proper security can assign or remove service indicators from a student\'s record</td>'
            + '<td><b>' + convertMeTrueFalse($serviceIndicatorsView) + '</b></td>'
            + '<td><b>' + convertMeTrueFalse($serviceIndicatorsUpdate) + '</b></td>'
            + '</tr>'
            + '<tr>'
            + '<td>Student Group View</td> '
            + '<td>View groups a student is associated with</td>   '
            + '<td><b>' + convertMeTrueFalse($studentGroupView) + '</b></td>'
            + '<td bgcolor="gainsboro"></td> '
            + '</tr>'
            + '<tr>'
            + '<td>View Study List</td>'
            + '<td>View a student\'s class schedule</td>'
            + '<td><b>' + convertMeTrueFalse($studyListView) + '</b></td>'
            + '<td bgcolor="gainsboro"></td> '
            + '</tr>'
            + '<tr>'
            + '<td>Registrar Enrollment</td> '
            + '<td>Adding and dropping a course utilizing Enrollment Request</td>  '
            + '<td><b>' + convertMeTrueFalse($registerEnrollmentView) + '</b></td>'
            + '<td><b>' + convertMeTrueFalse($registerEnrollmentUpdate) + '</b></td>'
            + '</tr>'
            + '<tr>'
            + '<td>Advisor Student Center</td>'
            + '<td>Access to students study list, advisor, program/plan, demographic data, e-mail address</td> '
            + '<td><b>' + convertMeTrueFalse($advisorStudentCenterView) + '</b></td>'
            + '<td bgcolor="gainsboro"></td> '
            + '</tr>'
            + '<tr>'
            + '<td>Class Permission</td> '
            + '<td>Creating general or student specific class permission numbers</td> '
            + '<td bgcolor="gainsboro"></td>'
            + '<td><b>' + convertMeTrueFalse($classPermissionUpdate) + '</b></td>'
            + '</tr>'
            + '<tr>'
            + '<td>Class Permission View</td> '
            + ' <td>View class permission numbers which have been created for a course</td> '
            + '<td><b>' + convertMeTrueFalse($classPermissionView) + '</b></td>'
            + '<td bgcolor="gainsboro"></td> '
            + '</tr>'
            + '<tr>'
            + '<td>Class Roster</td> '
            + '<td>View students enrolled, dropped or withdrawn in a course</td>   '
            + '<td><b>' + convertMeTrueFalse($classRosterView) + '</b></td>'
            + '<td bgcolor="gainsboro"></td> '
            + '</tr>'
            + '<tr>'
            + '<td>Block Enrollments</td> '
            + '<td>Adding and dropping a course utilizing Enrollment Request</td>  '
            + '<td><b>' + convertMeTrueFalse($blockEnrollmentsView) + '</b></td>'
            + '<td><b>' + convertMeTrueFalse($blockEnrollmentsUpdate) + '</b></td>'
            + '</tr>'
            + '<tr>'
            + '<td>Report Manager</td>'
            + '<td>Assists in running various reports</td>'
            + '<td><b>' + convertMeTrueFalse($reportManagerView) + '</b></td>'
            + '<td bgcolor="gainsboro"></td> '
            + '</tr>'
            + '<tr>'
            + '<td>Self Service Advisor</td> '
            + '<td>View Advisee photo, addresses, service indicators, emergency contacts, telephone numbers, grades, class schedule, enrollment appointment, print academic advising profile</td> '
            + '<td bgcolor="gainsboro"></td> '
            + '<td><b>' + convertMeTrueFalse($selfServiceAdvisorUpdate) + '</b></td>'
            + '</tr>'
            + '<tr>'
            + '<td>Fiscal Officer</td> '
            + '<td>View enrollment summary, term statistics, and UM term statistics</td>  '
            + '<td><b>' + convertMeTrueFalse($fiscalOfficerView) + '</b></td>'
            + '<td bgcolor="gainsboro"></td> '
            + '</tr>'
            + '<tr>'
            + '<td>Academic Advising Profile</td>'
            + '<td>Allows printing of the Academic Advising Profile</td>    '
            + '<td><b>' + convertMeTrueFalse($acadmenicAdvisingProfileUpdate) + '</b></td>'
            + '<td bgcolor="gainsboro"></td> '
            + '</tr>'
            + '</table>'
            + '</div>'
            + ''
            + '<h4>Admissions Access</h4>'
            + '<div id="admiss" style="padding:10px">'
            + admissions   
            + '</div>'
            + ''
            + '<h4>Student Financials (Cashiers) Access</h4>'
            + '<div id="stucashiers" style="padding:10px">'
            + '<table style="width:100%">'
            + '<tr>'
            + '<th>Role</th>'
            + '<th>Role Description</th>  '
            + '<th>View</th>'
            + ' <th>Update</th>'
            + '</tr>'
            + '<tr>'
            + '<td>SF General Inquiry</td>'
            + '<td>For staff outside of the Cashiers Office</td>   '
            + '<td><b>' + convertMeTrueFalse($generalInquiryView) + '</b></td>'
            + '<td bgcolor="gainsboro"></td> '
            + '</tr>'
            + '<tr>'
            + '<td>SF Cash Group Post</td>'
            + '<td>Also known as "Cost Centers" (for areas that want to apply charges)</td> '
            + '<td><b>' + convertMeTrueFalse($cashGroupPostView) + '</b></td>'
            + '<td><b>' + convertMeTrueFalse($cashGroupPostUpdate) + '</b></td>'
            + '</tr>'
            + '</table>'
            + '</div>'
            + ''
            + '<h4>Student Financial Aid Access</h4>'
            + '<div id="stufinaid" style="padding:10px">'
            + '<table style="width:100%">'
            + '<tr>'
            + '<th>Role</th>'
            + '<th>Role Description</th>  '
            + '<th>View</th>'
            + '<th>Update</th>'
            + '</tr>'
            + '<tr>'
            + '<td>FA Cash</td>'
            + '<td>View a student\'s financial aid awards and budget</td>'
            + '<td><b>' + convertMeTrueFalse($cashView) + '</b></td>'
            + '<td bgcolor="gainsboro"></td> '
            + '</tr>'
            + '<tr>'
            + '<td>FA Non Financial Aid Staff</td>'
            + '<td>Also known as "Cost Centers" (for areas that want to apply charges)</td>'
            + '<td><b>' + convertMeTrueFalse($nonFinancialAidStaff) + '</b></td>'
            + '<td bgcolor="gainsboro"></td> '
            + '</tr>'
            + '</table>'
            + '</div>'
            + ''
            + '<h4>Reserved Access</h4>'
            + '<div id="reserved" style="padding:10px">'
            + '<table style="width:100%">'
            + '<tr>'
            + '<th>Role</th>'
            + '<th>View</th>'
            + '<th>Update</th>'
            + '</tr>'
            + '<tr>'
            + '<td>Immunization View</td>'
            + '<td><b>' + convertMeTrueFalse($immunizationView) + '</b></td>'
            + '<td><b>' + convertMeTrueFalse($immunizationUpdate) + '</b></td>'
            + '</tr>'
            + '<tr>'
            + '<td>Transfer Credit Admission</td>'
            + '<td><b>' + convertMeTrueFalse($transferCreditAdmissionView) + '</b></td>'
            + '<td><b>' + convertMeTrueFalse($transferCreditAdmissionUpdate) + '</b></td>'
            + '</tr>'
            + '<tr>'
            + '<td>Relationships</td> '
            + '<td><b>' + convertMeTrueFalse($relationshipsView) + '</b></td>'
            + '<td><b>' + convertMeTrueFalse($relationshipsUpdate) + '</b></td>'
            + '</tr>'
            + '<tr>'
            + '<td>Student Groups</td>'
            + '<td bgcolor="gainsboro"></td> '
            + '<td><b>' + convertMeTrueFalse($studentGroupsUpdate) + '</b></td>'
            + '</tr>'
            + '<tr>'
            + '<td>Accommodate (Student Health)</td>'
            + '<td bgcolor="gainsboro"></td> '
            + '<td><b>' + convertMeTrueFalse($accommodateSHealthUpdate) + '</b></td>'
            + '</tr>'
            + '<tr>'
            + '<td>Support Staff (Registrar\'s Office)</td> '
            + '<td><b>' + convertMeTrueFalse($supportStaffView) + '</b></td>'
            + '<td><b>' + convertMeTrueFalse($supportStaffUpdate) + '</b></td>'
            + '</tr>'
            + '<tr>'
            + '<td>SAdvance Standing Report</td> '
            + '<td><b>' + convertMeTrueFalse($advanceStandingReportView) + '</b></td>'
            + '<td><b>' + convertMeTrueFalse($advanceStandingReportUpdate) + '</b></td>'
            + '</tr>'
            + '</table>'
            + '</div>'
            + ''
            + '<h4>Authorization</h4>  '
            + '<div id="auth" style="padding:10px">'
            + '<p>By signing, I understand any access given me is for University purposes as part of my job responsibilities. I am responsible for exercising due care to protect this information from unauthorized discloser by safeguarding my password(s) and ensuring the data I obtain is disseminated only through approved University channels. Unauthorized access and use/dissemination of data, are serious offenses, which may be subjected to disciplinary action.</p>'
            + '</div> '
            + '</div>'
            + ''
            
                              
                              
                              
            )
            
        }