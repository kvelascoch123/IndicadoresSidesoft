<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SsUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ss_user', function (Blueprint $table) {
            $table->bigIncrements('ss_user_id'); // GETUID() == POSTGRES CONFIG
            $table->string('name');
            $table->string('email');
            $table->string('tax_id');
            $table->string('code_photo');

            $table->unsignedBigInteger('ss_area_id');

            $table->foreign('ss_area_id')->references('ss_area_id')->on('ss_area');

            
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
        Schema::dropIfExists('ss_user');
    }
}
