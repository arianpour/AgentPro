<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    /**
     * Get all of the property member's address.
     */
    public function addresses(){
        return $this->morphMany('App\Address','addressable');
    }

    /**
     * Get the Owner that owns the property.
     */
    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }
}
