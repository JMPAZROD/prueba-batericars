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
            $table->bigIncrements('id');
            $table->enum('brand', ['mazda', 'chevrolet', 'renault', 'toyota', 'kia']);
            $table->string('version', 250);
            $table->integer('year');
            $table->string('license_plate', 6);
            $table->timestamps();
            $table->bigInteger('id_users')->nullable(false);
            $table->foreign('id_users')->references('id')->on('users')->onUpdate('cascade');
        });
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
