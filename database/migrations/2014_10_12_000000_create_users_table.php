<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('identification')->unique()->nullable();
            $table->string('name', 250)->nullable(false);
            $table->string('lastname', 250)->nullable(false);
            $table->string('email', 250)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('id_city')->nullable(false);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_city')->references('id')->on('cities')->onUpdate('cascade');
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
}
