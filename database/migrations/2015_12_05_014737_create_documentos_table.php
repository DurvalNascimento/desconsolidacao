<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('documentos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('tipo', 20);
                $table->integer('numero')->unique();
                $table->integer('vias');
                $table->string('origem', 35);
                $table->string('destino', 35);
                $table->date('data');
                $table->string('agente', 30);
                $table->string('destinatario', 35);
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
        Schema::drop('documentos');
    }

}
