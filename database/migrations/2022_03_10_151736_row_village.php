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
      Schema::create('row_villages', function (Blueprint $table) {
          $table->id();
          $table->string('state_code')->nullable();
          $table->string('state_name')->nullable();
          $table->string('district_code')->nullable();
          $table->string('district')->nullable();
          $table->string('sub_district_code')->nullable();
          $table->string('sub_district')->nullable();
          $table->string('census_code')->nullable();
          $table->string('village_name')->nullable();
          $table->string('household')->nullable();
          $table->string('population')->nullable();
          $table->string('dms_latitude')->nullable();
          $table->string('lat_dd')->nullable();
          $table->string('lat_min')->nullable();
          $table->string('main_sec')->nullable();
          $table->string('sub_sec')->nullable();
          $table->string('lat_sec')->nullable();
          $table->string('dms_longitude')->nullable();
          $table->string('long_dd')->nullable();
          $table->string('long_min')->nullable();
          $table->string('long_main_sec')->nullable();
          $table->string('long_sub_sec')->nullable();
          $table->string('long_sec')->nullable();
          $table->string('latitude')->nullable();
          $table->string('longitude')->nullable();
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
        //
    }
};
