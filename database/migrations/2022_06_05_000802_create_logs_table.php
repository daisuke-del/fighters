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
        Schema::create('logs', function (Blueprint $table) {
            $table->id(); // primary key
            $table->integer('room_id', 100)->unsigned()->nullable(false); // in room
            //$table->foreign('room_id')->references('room_id')->on('rooms'); 
            $table->integer('winner', 255)->nullable(false); // win user's id
            //$table->foreign('id')->references('id')->on('users');
            $table->integer('loser', 255)->nullable(false); // lose user's id
            //$table->foreign('id')->references('id')->on('users');
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
        Schema::dropIfExists('logs');
    }
};
