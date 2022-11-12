<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverToEnterpriseRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_to_enterprise', function (Blueprint $table) {
            $table->id();
            $table->integer('driver_id')->unique();
            $table->integer('enterprise_id');
            $table->foreign('driver_id')->references('id')->on('drivers');
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
        Schema::dropIfExists('driver_to_enterprise_relation');
    }
}
