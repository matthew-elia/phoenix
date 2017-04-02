<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     
    public function emails()
    {
        return $this->hasMany('App\Email');
    }

    public function phones()
    {
        return $this->hasMany('App\Phone');
    } 

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }
}
