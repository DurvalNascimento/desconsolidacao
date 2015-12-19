<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('mbls', function(Blueprint $table) {
                $table->increments('id');
                $table->string('registro');
                $table->string('NMbl');
                $table->string('NHbl');
                $table->string('cnee');
                $table->string('navioPrimeiraPerna');
                $table->string('navio');
                $table->string('viagem');
                $table->string('POR');
                $table->string('POL');
                $table->string('POD');
                $table->string('transbordo');
                $table->string('tipo');
                $table->string('ceMbl');
                $table->date('dataRegCeMbl');
                $table->date('ETA');
                $table->string('atracado');
                $table->string('desatracado');
                $table->integer('freetime');
                $table->string('cnpj');
                $table->decimal('vlrFrete');
                $table->decimal('vlrTHC');
                $table->string('moedaFrete');
                $table->string('armador');
                $table->date('dataFaturamento');
                $table->boolean('faturado');
                $table->boolean('finalizado');
                $table->boolean('desconsolidar');
                $table->integer('id_agente')->unsigned;
                $table->integer('id_notafiscal')->unsigned;
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
        Schema::drop('mbls');
    }

}
