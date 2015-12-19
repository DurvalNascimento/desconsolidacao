<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aereo extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'aereos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['registro', 'referencia', 'agente', 'NMawb', 'NHawb', 'origem', 'destino', 'datachegada', 'vlrDesconsol', 'vlrDelivery', 'faturado', 'dataFaturamento', 'finalizado', 'custoDesconsol', 'notafiscal_id'];


       public function notafiscal()
    {
        return $this->belongsTo('App\notafiscal');
    }
}
