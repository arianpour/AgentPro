<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['firstName','lastName','email','phoneNo'];


    /**
     * Get all of the owning customerable models.
     */
    public function customerable()
    {
        return $this->morphTo();
    }


}
