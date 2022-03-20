<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStateToCenterDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state_to_center_data', function (Blueprint $table) {
            $table->id();
            $table->string('token')->nullable();
            $table->string('r')->nullable();
            $table->string('application_id')->nullable();
            $table->string('applicant_id')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('applicant_email')->nullable();
            $table->string('current_owner')->nullable();
            $table->string('application_status')->nullable();
            $table->string('district_code')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('remarks')->nullable();
            $table->date('application_submission_date')->nullable();
            $table->date('approved_date')->nullable();
            $table->date('rejected_date')->nullable();
            $table->date('pending_date')->nullable();
            $table->date('reverted_date')->nullable();
            $table->string('response_code')->nullable();
            $table->string('response_msg')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('state_to_center_data');
    }
}
