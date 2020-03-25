<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SsArea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ss_area', function (Blueprint $table) {
            $table->bigIncrements('ss_area_id'); // GETUID() == POSTGRES CONFIG
            $table->string('name');
            //TODOS
            $table->decimal('value', 10, 2); 
            $table->boolean('isactive');
            $table->text('description');
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
        Schema::dropIfExists('ss_area');
    }
}
