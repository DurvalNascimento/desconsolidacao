<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTermosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('termos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name', 100);
                $table->integer('cliente_id')->unsigned();
                $table->string('token', 15);
                $table->integer('sign');
                $table->timestamps();
                $table->foreign('cliente_id')->references('id')->on('clientes');

            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('termos');
    }

}
