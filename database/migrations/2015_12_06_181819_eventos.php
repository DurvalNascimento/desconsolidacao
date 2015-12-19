<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nmbl', 100);
                $table->string('dataregmbl', 100);
                $table->string('datareghbl', 100);
                $table->string('ETA', 100);
                $table->string('atracado', 100);
                $table->string('desatrado', 100);
                $table->string('dataprescarga', 100);
                $table->string('datalibmbl', 100); 
                $table->string('inconsistencia', 100);
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
        Schema::drop('eventos');
    }
}
