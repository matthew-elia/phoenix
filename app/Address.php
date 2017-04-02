<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
     /**
     * Get the customer that owns the address.
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
