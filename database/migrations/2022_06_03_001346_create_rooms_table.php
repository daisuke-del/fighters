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
            $table->integer('room_id', 100)->primary(); //部屋番号
            $table->string('password',255)->nullable(false); //パスワード
            $table->
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
