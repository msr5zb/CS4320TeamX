        function showPreview(
        $requestId,
        $fname,
        $lname,
        $userSSO,
        $title,
        $employeeId,
        $address,
        $requestDescription,
        $ferpaScore,
        
        $ugrd,
        $grad,
        $med,
        $vetMed,
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
            
                //Note to Self, (Rallo), make statements for if a value = 't', value = "true" or itself....
            
             function convertMeTrueFalse(a)
             {
               a = typeof a !== 'false' ? a : 'true';
             }

           
            document.getElementById("previewPane").style.visibility = "visible";
            document.getElementById("downloadPDFbutton").style.visibility = "visible";
            
            $("#content").html(''
            + '<div class="container" style="width:50%;">'
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
            + '<label for="dept">* Department:</label>'
            + 'INSERT DEPARTMENT HERE!'
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
            + '<label for="phnum">* Phone Number:</label>'
            + 'INSERT PHONE NUMBER HERE!'
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
            + '<i>UGRD</i>'
            + '<b>,</b>'
            + '<i>GRAD</i>'
            + '<b>,</b>'
            + '<i></i>'
            + '</form>'
            + '</div>'
            + '</div>'
            + ''
            + ''
            + ''
            + ''
            + ''
            + ''
            + ''
            + ''
            
                              
                              
                              
            )
            
        }