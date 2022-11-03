<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->integer("mileage");
            $table->string("short_number");
            $table->date("delivery_date");
            $table->string("image");
        });
        //DB::statement("ALTER TABLE vehicles ADD image bytea");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
