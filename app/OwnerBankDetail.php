<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OwnerBankDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['bankName','accountNo'];

}
