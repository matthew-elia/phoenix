<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
        /**
     * Get the customer that owns the phone.
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
