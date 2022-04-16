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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->integer('password');
            $table->string('email');
            $table->integer('player_id');
            $table->binary('image')->nullable();
            $table->integer('age');
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->string('disease')->nullable();
            $table->string('skill')->nullable();
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
        Schema::dropIfExists('players');
    }
};
