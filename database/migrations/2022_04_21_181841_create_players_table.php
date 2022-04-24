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
            $table->string('full_name');
            $table->string('password');
            $table->string('email');
            
            $table->integer('age');
            $table->integer('hight');
            $table->integer('weight');
            $table->string('dieses');
            
            //$table->unsignedBigInteger('team_id');
           // $table->foreign('team_id')->references('id')->on('teams');
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
