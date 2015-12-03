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
            $table->boolean('immunizationView')->default(0);
            $table->boolean('immunizationUpdate')->default(0);
            $table->boolean('transferCreditAdmissionView')->default(0);
            $table->boolean('transferCreditAdmissionUpdate')->default(0);
            $table->boolean('relationshipsView')->default(0);
            $table->boolean('relationshipsUpdate')->default(0);
            $table->boolean('studentGroupsUpdate')->default(0);
            $table->boolean('accommodateSHealthUpdate')->default(0);
            $table->boolean('supportStaffView')->default(0);
            $table->boolean('supportStaffUpdate')->default(0);
            $table->boolean('advanceStandingReportView')->default(0);
            $table->boolean('advanceStandingReportUpdate')->default(0);
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
