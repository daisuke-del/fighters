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
        Schema::create('users', function (Blueprint $table) {
            $table->id();//primary key
            $table->intenger('room')->unsigned()->nullable(false); //belong to room
            $table->string('name')->nullable(false)->default('nanashi'); // user name
            $table->string('img')->nullable(false)->default('default_img.jpg'); // user profile image
            $table->foreign('room_id')->references('room_id')->on('rooms'); 
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
        Schema::dropIfExists('users');
    }
};
