<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SsBacklogYearPolitics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ss_backlog_year_politics', function (Blueprint $table) {
            $table->bigIncrements('ss_backlog_year_politics_id'); // GETUID() == POSTGRES CONFIG
            $table->unsignedBigInteger('ss_backlog_year_id');
            $table->unsignedBigInteger('ss_politics_id');
            $table->unsignedBigInteger('ss_area_id');
            $table->unsignedBigInteger('ss_user_id');
            $table->string('description');

            //TODOS
            $table->boolean('isactive'); 
            $table->timestamps();
  
            $table->foreign('ss_backlog_year_id')->references('ss_backlog_year_id')->on('ss_backlog_year');
            $table->foreign('ss_politics_id')->references('ss_politics_id')->on('ss_politics');
            $table->foreign('ss_area_id')->references('ss_area_id')->on('ss_area');
            $table->foreign('ss_user_id')->references('ss_user_id')->on('ss_user');
     

        
    });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ss_backlog_year_politics');
    }
}
 