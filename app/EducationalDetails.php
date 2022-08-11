<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationalDetails extends Model
{
    //
    protected $table = 'educationaldetails';

    protected $fillable = [
        'user_id','passout_year','branch','college'
    ];
}
