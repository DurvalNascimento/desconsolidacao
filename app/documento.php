<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documento extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'documentos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo', 'numero', 'vias', 'origem', 'destino', 'data', 'agente', 'destinatario'];

}
