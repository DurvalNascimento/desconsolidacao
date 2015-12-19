<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAereosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('aereos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('registro', 15);
                $table->string('referencia', 15);
                $table->string('agente', 35);
                $table->string('NMbl', 20)->unique();
                $table->string('NHbl', 20);
                $table->string('origem', 25);
                $table->string('destino', 25);
                $table->date('datachegada');
                $table->decimal('vlrDesconsol', 6, 2);
                $table->decimal('vlrDelivery', 6 , 2);
                $table->boolean('faturado');
                $table->date('dataFaturamento');
                $table->integer('finalizado');
                $table->decimal('custoDesconsol', 6, 2);
                $table->integer('id_agente')->unsigned();
                $table->integer('id_notafiscal')->unsigned();
                $table->foreign('id_agente')->references('id')->on('agentes');
                $table->foreign('id_notafiscal')->references('id')->on('notafiscals');

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
        Schema::drop('aereos');
    }

}
