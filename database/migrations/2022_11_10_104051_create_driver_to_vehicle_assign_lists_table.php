<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverToVehicleAssignListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_to_vehicle_assign_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('driver_id');
            $table->integer('vehicle_id');
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->date('start_date');
            $table->date('end_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_to_vehicle_assign_lists');
    }
}
