<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hbl extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hbls';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ETA', 'NHbl', 'NMbl', 'ceHbl', 'datace', 'freetime', 'shipper', 'cnee', 'cnpjcnee', 'vlrFrete', 'moedaFrete', 'vlrTHC', 'faturado', 'mbl_id','notafiscal_id', 'agente', 'finalizado', 'vlrDesconsol', 'dataFaturamento', 'referencia'];


    public function mbls()
    {
        return $this->belongsTo('App\Mbl', 'mbl_id');

    }

    public function nf()
    {
        return $this->belongsTo('App\notafiscal', 'notafiscal_id');

     }   

        public function faturamento()
    {
        return $this->hasOne('App\faturamento', 'hbl_id');
    
    }

      public function termo()
    {
        return $this->hasOne('App\termo', 'hbl_id');
    
    }

}
