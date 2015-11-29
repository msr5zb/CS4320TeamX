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
            $table->integer('id')->unsigned();
            $table->boolean('immunizationView')->default(0);
            $table->boolean('immunizationUpdate')->default(0);
            $table->boolean('transferCreditAdmissionView')->default(0);
            $table->boolean('transferCreditAdmissionUpdate')->default(0);
            $table->boolean('relationshipsView')->default(0);
            $table->boolean('relationshipsUpdate')->default(0);
            $table->boolean('studentGroupsView')->default(0);
            $table->boolean('studentGroupsUpdate')->default(0);
            $table->boolean('accommodateSHealthUpdate')->default(0);
            $table->boolean('supportStaffView')->default(0);
            $table->boolean('supportStaffUpdate')->default(0);
            $table->boolean('advanceStandingReportView')->default(0);
            $table->boolean('advanceStandingReportUpdate')->default(0);
            $table->foreign('id')->references('id')->on('request');
            $table->primary('id');
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
