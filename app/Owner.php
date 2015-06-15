<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{

    /**
     * Get the user that owns the Owner.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the owners record associated with the user.
     */
    public function property()
    {
        return $this->hasMany('App\Property');
    }
    /**
     * Get the owners record associated with the user.
     */
    public function ownerBankDetail()
    {
        return $this->hasMany('App\OwnerBankDetail');
    }

    /**
     * Get all of the owner member's customer.
     */

    public function customer(){
        return $this->morphMany('App\Customer','customerable');
    }
    /**
     * Get all of the owner member's address.
     */
    public function addresses(){
        return $this->morphMany('App\Address','addressable');
    }


}
