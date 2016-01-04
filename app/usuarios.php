<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuarios';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'email', 'password', 'nivelAcess', 'empresa', 'ativo'];

}
