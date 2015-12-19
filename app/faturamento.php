<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faturamento extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'faturamentos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['OS', 'documento', 'data', 'status', 'hbl_id', 'referencia'];



        public function Notafiscal()
    {
        return $this->belongsTo('App\Hbl');
    }

}
