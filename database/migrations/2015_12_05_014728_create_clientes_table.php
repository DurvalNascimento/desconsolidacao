<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('clientes', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nome', 35);
                $table->string('cnpj')->unique();
                $table->string('endereco', 100);
                $table->string('emailtermo', 20);
                $table->string('email', 20);
                $table->string('telefone', 20);
                $table->integer('id_agente')->unsigned();
                $table->foreign('id_agente')->references('id')->on('agentes');
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
        Schema::drop('clientes');
    }

}
