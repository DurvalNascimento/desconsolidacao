<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaturamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('faturamentos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('OS');
                $table->string('documento');
                $table->date('data');
                $table->boolean('status');
                $table->integer('hbl_id');
                $table->string('referencia');
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
        Schema::drop('faturamentos');
    }

}
