<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SsBacklogYear extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ss_backlog_year', function (Blueprint $table) {
            $table->bigIncrements('ss_backlog_year_id'); // GETUID() == POSTGRES CONFIG
            $table->unsignedBigInteger('ss_backlog_id');
            $table->unsignedBigInteger('ss_year_id');
            $table->unsignedBigInteger('ss_user_id');
            $table->unsignedBigInteger('ss_area_id');

            $table->foreign('ss_backlog_id')->references('ss_backlog_id')->on('ss_backlog');
            $table->foreign('ss_year_id')->references('ss_year_id')->on('ss_year');
            $table->foreign('ss_user_id')->references('ss_user_id')->on('ss_user');
            $table->foreign('ss_area_id')->references('ss_area_id')->on('ss_area');

            //TODOS
            $table->decimal('qualification', 10, 2); 
            $table->decimal('points_politics', 10, 2); 
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
        Schema::dropIfExists('ss_backlog_year');

    }
}
