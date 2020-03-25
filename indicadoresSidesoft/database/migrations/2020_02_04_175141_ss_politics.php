<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SsPolitics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ss_politics', function (Blueprint $table) {
            $table->bigIncrements('ss_politics_id'); // GETUID() == POSTGRES CONFIG
            $table->enum('type', ['suma', 'resta']);
            $table->string('descripcion'); // SUMA O RESTA 
            $table->integer('points'); 
            $table->boolean('isactive'); 
            $table->unsignedBigInteger('ss_area_id');
            $table->foreign('ss_area_id')->references('ss_area_id')->on('ss_area');
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
        Schema::dropIfExists('ss_politics');
    }
} 
