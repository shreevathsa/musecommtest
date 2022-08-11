<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    //
    protected $table = 'personaldetails';


    protected $fillable = [
        'user_id','mobile_number',
    ];
}
