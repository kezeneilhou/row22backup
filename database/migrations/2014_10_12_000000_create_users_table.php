<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Fields 'name','email','from_center','request_id','center_session_id' to be captured from POST request of CenterToState
     * mobile and email refers to authorized persons details
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->startingValue(1001);
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('mobile')->unique();
            $table->string('designation')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('salt')->nullable();
            $table->string('role')->nullable();
            $table->string('district')->nullable();
            $table->string('from_center')->nullable();
            $table->string('request_id')->nullable();
            $table->string('center_session_id')->nullable();
            $table->string('system_ip')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('admin_id')->nullable();
            $table->string('status')->nullable();
            $table->string('profile_complete')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
