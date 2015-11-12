<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRecords extends Model
{
    //allow mass assignment for the following attributes
    protected $fillable = [
        'basicInquiryView',
        'advancedInquiryView',
        'advancedInquiryUpdate',
        'threeCsView',
        'threeCsUpdate',
        'advisorUpdate',
        'departmentSOCUpdate',
        'serviceIndicatorsView',
        'serviceIndicatorsUpdate',
        'studentGroupView',
        'studyListView',
        'registerEnrollmentView',
        'registerEnrollmentUpdate',
        'advisorStudentCenterView',
        'classPermissionView',
        'classPermissionUpdate',
        'classRosterView',
        'blockEnrollmentsView',
        'blockEnrollmentsUpdate',
        'reportManagerView',
        'selfServiceAdvisorUpdate',
        'fiscalOfficerView',
        'acadmenicAdvisingProfileUpdate'
    ];
}
