<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    //
    protected $fillable = [
        'acc_name','acc_address','acc_contact1','acc_contact2','acc_designation','acc_area','acc_type','acc_remarks'
        ];
    
}
