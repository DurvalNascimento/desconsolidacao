<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('hbls', function(Blueprint $table) {
                $table->increments('id');
                $table->string('NHbl');
                $table->string('NMbl');
                $table->string('ceHbl');
                $table->date('datace');
                $table->integer('freetime');
                $table->string('shipper');
                $table->string('cnee');
                $table->decimal('vlrFrete');
                $table->decimal('moedaFrete');
                $table->decimal('vlrTHC');
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
        Schema::drop('hbls');
    }

}
