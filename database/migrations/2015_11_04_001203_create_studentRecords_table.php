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
        Schema::dropIfExists('student_records');
        Schema::create('student_records', function (Blueprint $table) {
            $table->integer('requestId')->unsigned();
            $table->boolean('basicInquiryView')->default(0);
            $table->boolean('advancedInquiryView')->default(0);
            $table->boolean('advancedInquiryUpdate')->default(0);
            $table->boolean('threeCsView')->default(0);
            $table->boolean('threeCsUpdate')->default(0);
            $table->boolean('advisorUpdate')->default(0);
            $table->boolean('departmentSOCUpdate')->default(0);
            $table->boolean('serviceIndicatorsView')->default(0);
            $table->boolean('serviceIndicatorsUpdate')->default(0);
            $table->boolean('studentGroupView')->default(0);
            $table->boolean('studyListView')->default(0);
            $table->boolean('registerEnrollmentView')->default(0);
            $table->boolean('registerEnrollmentUpdate')->default(0);
            $table->boolean('advisorStudentCenterView')->default(0);
            $table->boolean('classPermissionView')->default(0);
            $table->boolean('classPermissionUpdate')->default(0);
            $table->boolean('classRosterView')->default(0);
            $table->boolean('blockEnrollmentsView')->default(0);
            $table->boolean('blockEnrollmentsUpdate')->default(0);
            $table->boolean('reportManagerView')->default(0);
            $table->boolean('selfServiceAdvisorUpdate')->default(0);
            $table->boolean('fiscalOfficerView')->default(0);
            $table->boolean('acadmenicAdvisingProfileUpdate')->default(0);
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
