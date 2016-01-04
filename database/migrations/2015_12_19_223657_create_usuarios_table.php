<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('usuarios', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nome');
$table->string('email');
$table->string('password');
$table->integer('nivelAcess');
$table->string('empresa');
$table->boolean('ativo');

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
        Schema::drop('usuarios');
    }

}
