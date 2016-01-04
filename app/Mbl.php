<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mbl extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mbls';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['registro', 'NMbl', 'cnee', 'navioPrimeiraPerna', 'navio', 'viagem', 'POR', 'POL', 'POD', 
    'transbordo', 'tipo', 'ceMbl', 'dataRegCeMbl', 'ETA', 'atracado', 'desatracado', 'freetime', 'cnpj', 'vlrFrete', 
    'vlrTHC', 'moedaFrete', 'armador', 'dataFaturamento', 'faturado', 'finalizado', 'notafiscal_id',  
    'agente_id', 'hblcnee', 'NHbl','ceHbl', 'prealerta', 'desconsolidado'];


   
        public function Notafiscal()
    {
        return $this->belongsTo('App\notafiscal');
    }


        public function agentes()
    {
        return $this->belongsTo('App\agente', 'agente_id');
    }

     public function hbls()
    {
        return $this->hasMany('App\Hbl');
    }

}


