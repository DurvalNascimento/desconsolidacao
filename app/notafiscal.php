<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notafiscal extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'notafiscals';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero', 'data', 'taxaUsd', 'valor', 'status'];


    public function Registros()
    {
        return $this->hasMany('App\Mbl');
    }

    public function hbls()
    {
        return $this->hasMany('App\Hbl');
    }

     public function aereos()
    {
        return $this->hasMany('App\aereo');
    }
}
