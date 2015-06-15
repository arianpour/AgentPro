<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * Get the user that owns the Client.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get all of the client member's customer.
     */
    public function customer(){
        return $this->morphMany('App\Customer','customerable');
    }
    /**
     * Get all of the client member's address.
     */
    public function addresses(){
        return $this->morphMany('App\Address','addressable');
    }


}
