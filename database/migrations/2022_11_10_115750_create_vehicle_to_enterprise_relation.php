<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleToEnterpriseRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_to_enterprise', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle_id')->unique();
            $table->integer('enterprise_id');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->foreign('enterprise_id')->references('id')->on('enterprises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_to_enterprise_relation');
    }
}
