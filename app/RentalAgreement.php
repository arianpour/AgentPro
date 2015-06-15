<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentalAgreement extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['dateOfAgreement','commencingDate','expireDate'
                            ,'rentalAmount','rentalDeposit','utilitiesDeposit'
                            ,'otherDeposit','premiseUse'];

}
