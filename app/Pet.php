<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public $timestamps = false;

    public function client()
    {
        return $this->hasOne('App\Client', 'id', 'client_id');
    }
}
