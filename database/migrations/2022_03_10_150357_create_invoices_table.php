<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *  Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('challan_no')->nullable(); //same challand no. for multiple selected tower. Explode app_id and store in individual row
            $table->string('challan_type')->nullable();// either New or Renewal
            $table->string('app_id')->nullable(); //application id of tower selected
            $table->string('total_annual_charge')->nullable();
            $table->string('total_ot_charge')->nullable();
            $table->string('total_payable')->nullable();
            $table->date('challan_date')->nullable();
            $table->date('challan_expiry_date')->nullable();
            $table->date('payment_date')->nullable();
            $table->string('payment_proof')->nullable();
            $table->string('order_id')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('invoices');
    }
};
