<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('agentes', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nome', 35);
                $table->string('cnpj', 20)->unique();
                $table->string('endereco', 50);
                $table->string('email1', 35);
                $table->string('email2', 35);
                $table->string('telefone', 20);
                $table->decimal('valordesconsolmaritimo', 6, 2);
                $table->decimal('valordesconsolaereo', 6, 2);
                $table->string('gerente', 35);
                $table->decimal('custo', 6, 2);
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
        Schema::drop('agentes');
    }

}
