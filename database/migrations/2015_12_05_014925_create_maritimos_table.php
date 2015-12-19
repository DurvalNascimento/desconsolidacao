<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaritimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('maritimos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('registro', 20);
                $table->string('agente', 25);
                $table->string('NMbl')->unique();
                $table->string('NHbl', 15);
                $table->string('POL', 35);
                $table->string('POD', 35);
                $table->string('ceMbl', 25);
                $table->string('ceHbl', 25);
                $table->date('ETA');
                $table->date('atracado');
                $table->date('desatrado');
                $table->string('feeder', 35);
                $table->string('mainvessel', 35);
                $table->string('viagem', 10);
                $table->string('hblCnee', 50);
                $table->string('transbordo', 35);
                $table->integer('freetimeMbl');
                $table->integer('freetimeHbl');
                $table->boolean('faturado');
                $table->decimal('vlsDesconsol', 6, 2);
                $table->date('dataFaturamento');
                $table->boolean('finalizado');
                $table->integer('id_notafiscal')->unsigned();
                $table->integer('id_agente')->unsigned();
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
        Schema::drop('maritimos');
    }

}
