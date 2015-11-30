<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRecords extends Model
{
    // Table this points towards
    protected $table = 'student_records';
    
    // We have to tell eloquent PK due it not being 'id'
    protected $primaryKey = 'requestId';

    // Turn off timestamps, since they are not included in the table
    public $timestamps = false;

    //Turn off incrementer, eloquent expects a variable to auto increment
    public $increments = false;

    //allow mass assignment for the following attributes
    protected $fillable = [
        'requestId',
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
