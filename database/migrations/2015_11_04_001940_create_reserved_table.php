<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::dropIfExists('reserved');
        Schema::create('reserved', function (Blueprint $table) {
            $table->integer('requestId')->unsigned();
            $table->boolean('immunizationView');
            $table->boolean('immunizationUpdate');
            $table->boolean('transferCreditAdmissionView');
            $table->boolean('transferCreditAdmissionUpdate');
            $table->boolean('relationshipsView');
            $table->boolean('relationshipsUpdate');
            $table->boolean('studentGroupsView');
            $table->boolean('studentGroupsUpdate');
            $table->boolean('accommodateSHealthUpdate');
            $table->boolean('supportStaffView');
            $table->boolean('supportStaffUpdate');
            $table->boolean('advanceStandingReportView');
            $table->boolean('advanceStandingReportUpdate');
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
        Schema::drop('reserved');
    }
}
