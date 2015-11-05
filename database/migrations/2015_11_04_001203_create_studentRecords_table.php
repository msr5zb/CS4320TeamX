<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('studentRecords');
        Schema::create('studentRecords', function (Blueprint $table) {
            $table->integer('requestId')->unsigned();
            $table->boolean('basicInquiryView');
            $table->boolean('advancedInquiryView');
            $table->boolean('advancedInquiryUpdate');
            $table->boolean('threeCsView');
            $table->boolean('threeCsUpdate');
            $table->boolean('advisorUpdate');
            $table->boolean('departmentSOCUpdate');
            $table->boolean('serviceIndicatorsView');
            $table->boolean('serviceIndicatorsUpdate');
            $table->boolean('studentGroupView');
            $table->boolean('studyListView');
            $table->boolean('registerEnrollmentView');
            $table->boolean('registerEnrollmentUpdate');
            $table->boolean('advisorStudentCenterView');
            $table->boolean('classPermissionView');
            $table->boolean('classPermissionUpdate');
            $table->boolean('classRosterView');
            $table->boolean('blockEnrollmentsView');
            $table->boolean('blockEnrollmentsUpdate');
            $table->boolean('reportManagerView');
            $table->boolean('selfServiceAdvisorUpdate');
            $table->boolean('fiscalOfficerView');
            $table->boolean('acadmenicAdvisingProfileUpdate');
            $table->foreign('requestId')->references('requestId')->on('request');
            $table->primary('requestId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('studentRecords');
    }
}
