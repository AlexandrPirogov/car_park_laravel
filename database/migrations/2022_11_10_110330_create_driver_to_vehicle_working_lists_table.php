<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverToVehicleWorkingListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_to_vehicle_working_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('assigned_id');
            $table->foreign('assigned_id')->references('id')->on('driver_to_vehicle_assign_lists');
            $table->timestamp('start_working_date');
            $table->timestamp('end_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_to_vehicle_working_lists');
    }
}
