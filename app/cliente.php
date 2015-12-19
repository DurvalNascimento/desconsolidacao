<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clientes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'cnpj', 'endereco', 'emailtermo', 'email', 'telefone', 'id_agente'];

}
