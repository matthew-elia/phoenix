<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $table = 'customer_addresses';

     /**
     * Get the customer that owns the address.
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
