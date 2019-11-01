<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;

    public function pets()
    {
        return $this->hasMany('App\Pet', 'client_id', 'id');
    }

    protected $fillable = ['first_name', 'surname'];
}
