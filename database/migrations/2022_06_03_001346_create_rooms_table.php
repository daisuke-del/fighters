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
        Schema::create('rooms', function (Blueprint $table) {

            $table->integer('room_id', 100)->unsigned()->nullable(false)->primary(); //room id
            $table->string('password',255)->nullable(false); //password
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void_
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
