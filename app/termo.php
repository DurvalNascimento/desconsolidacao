<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class termo extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'termos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'hbl_id', 'token', 'sign'];


    public function hbls()
    {
        return $this->belongsTo('App\Hbl', 'hbl_id');

    }

}
