<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsMaritimo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('ins_maritimos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nmbl', 20);
                $table->date('dataregmbl');
                $table->date('datareghbl');
                $table->date('ETA');
                $table->date('atracado');
                $table->date('desatrado');
                $table->date('dataprescarga');
                $table->date('datalibmbl'); 
                $table->string('evento', 100);
                $table->boolean('status');
                $table->integer('id_registro')->unsigned();
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
       Schema::drop('ins_maritimos');
    }
}
