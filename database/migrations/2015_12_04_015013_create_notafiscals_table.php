<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotafiscalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('notafiscals', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('numero')->unique();
                $table->date('data');
                $table->decimal('taxaUsd', 6, 2);
                $table->decimal('valor', 6, 2);
                $table->boolean('status');
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
        Schema::drop('notafiscals');
    }

}
