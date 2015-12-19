<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model {


     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'files';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'user_id', 'referencia'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
