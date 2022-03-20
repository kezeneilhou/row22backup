<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * app_id for towers (starting digit 10 for Tower,11 for OFC + id)
     * @return void
     */
    public function up()
    {
        Schema::create('row_towers', function (Blueprint $table) {
            $table->id()->startingValue(1001);
            $table->string('user_id')->nullable();
            $table->string('app_id')->nullable();
            $table->string('tower_code',10)->nullable(); // issued when DC approves tower
            $table->string('nature_tower', 3)->nullable();
            $table->string('district', 11)->nullable();
            $table->string('district_code',4)->nullable();
            $table->string('block')->nullable();
            $table->string('city_town_village')->nullable();
            $table->string('tower_lat')->nullable();
            $table->string('tower_long')->nullable();
            $table->string('tower_location', 12)->nullable();
            $table->string('land_owner',4)->nullable();
            $table->string('is_forest_land', 3)->nullable();
            $table->string('land_size', 20)->nullable();
            $table->string('land_area', 10 )->nullable();
            $table->string('plot_no')->nullable();
            $table->string('road_street')->nullable();
            $table->string('ward_colony')->nullable();
            $table->string('structure_name')->nullable();
            $table->string('structure_height', 10)->nullable();
            $table->string('structure_area', 10)->nullable();
            $table->string('structure_address')->nullable();
            $table->string('structure_owner_name')->nullable();
            $table->string('structure_owner_address')->nullable();
            $table->string('tower_height', 10)->nullable();
            $table->string('tower_weight', 10)->nullable();
            $table->string('tower_mounting', 4)->nullable();
            $table->string('tower_antennae', 4)->nullable();
            $table->string('tower_env', 10)->nullable(); // whether municpal council or town committee or Village council
            $table->string('tower_area', 10)->nullable();
            $table->string('funding_source', 8)->nullable();
            $table->string('work_mode')->nullable();
            $table->string('work_inconvenience')->nullable();
            $table->string('work_public_safety')->nullable();
            $table->string('other_matter_dot')->nullable();
            $table->string('upload_location_plan')->nullable();
            $table->string('upload_technical_design')->nullable();
            $table->string('upload_ss_certificate')->nullable();
            $table->string('upload_soil_certificate')->nullable();
            $table->string('upload_fire_certificate')->nullable();
            $table->string('upload_sacfa_clearance')->nullable();
            $table->string('upload_envionment_clearance')->nullable();
            $table->string('upload_term_receipt')->nullable();
            $table->string('upload_arai_certificate')->nullable();
            $table->string('upload_ownership_doc')->nullable();
            $table->string('upload_lease_doc')->nullable();
            $table->string('upload_ipreg_cert')->nullable();
            $table->string('upload_building_noc')->nullable();
            $table->string('upload_govt_consent')->nullable();
            $table->string('verification_file')->nullable(); // to be uploaded by DC
            $table->string('app_status')->nullable();
            $table->string('pay_status')->nullable(); // to be updated by DITC
            $table->string('rejection_reason')->nullable(); //updated by DC
            $table->string('requires_renewal')->nullable(); //auto calculate prior to 60 days from expiry_date
            $table->date('expiry_date')->nullable();
            $table->date('approval_date')->nullable(); //starts from DC approval date
            $table->date('reverted_date')->nullable();
            $table->date('rejection_date')->nullable();
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
        Schema::dropIfExists('row_towers');
    }
};
