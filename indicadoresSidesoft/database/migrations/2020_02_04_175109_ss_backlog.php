<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SsBacklog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ss_backlog', function (Blueprint $table) {
            $table->bigIncrements('ss_backlog_id'); // GETUID() == POSTGRES CONFIG
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
        Schema::dropIfExists('ss_backlog');

    }
}
