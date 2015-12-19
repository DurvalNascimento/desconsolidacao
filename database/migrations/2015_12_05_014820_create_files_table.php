<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('files', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name', 50);
                $table->integer('user_id')->unsigned();
                $table->string('referencia', 20);
                $table->boolean('status');
                $table->timestamps();
                $table->foreign('user_id')->references('id')->on('users');

            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('files');
    }

}
