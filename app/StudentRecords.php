<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRecords extends Model
{
    // Set what table this point towards
    protected $table = 'student_records';

    // Set the primary Key 
    protected $primaryKey = 'requestId';

    // Turn off timestamps, since they are not included in the table
    public $timestamps = false;

    //Turn off incrementer, eloquent expects a variable to auto increment
    public $increments = false;
     
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
