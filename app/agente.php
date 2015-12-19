<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agente extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'agentes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['emails', 'nome', 'cnpj', 'endereco', 'email1', 'email2', 'telefone', 'valordesconsolmaritimo', 'valordesconsolaereo', 'gerente', 'custo'];


     public function mbl()
    {
        return $this->hasMany('App\Mbl');
    }
}
