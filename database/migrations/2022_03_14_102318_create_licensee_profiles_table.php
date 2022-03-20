<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licensee_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('licensee_name')->nullable();
            $table->string('licensee_type')->nullable();
            $table->string('licensee_gst')->nullable();
            $table->string('licensee_pan')->nullable();
            $table->string('licensee_tan')->nullable();
            $table->string('dot_reg_no')->nullable();
            $table->date('dot_reg_date')->nullable();
            $table->date('dot_reg_expiry')->nullable();
            $table->string('auth_id_proof_type')->nullable();
            $table->string('auth_id_proof_no')->nullable();
            $table->string('ho_address')->nullable();
            $table->string('ho_pin')->nullable();
            $table->string('ho_state')->nullable();
            $table->string('ho_district')->nullable();
            $table->string('ho_mobile')->nullable();
            $table->string('ho_email')->nullable();
            $table->string('so_address')->nullable();
            $table->string('so_pin')->nullable();
            $table->string('so_state')->nullable();
            $table->string('so_district')->nullable();
            $table->string('so_mobile')->nullable();
            $table->string('so_email')->nullable();
            $table->string('dot_license')->nullable();
            $table->string('id_proof')->nullable();
            $table->string('auth_letter')->nullable();
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
        Schema::dropIfExists('licensee_profiles');
    }
};
