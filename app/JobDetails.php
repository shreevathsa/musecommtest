<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobDetails extends Model
{
    //

    protected $table = 'jobdetails';

    protected $fillable = [
        'user_id','company_name','designation','location',
    ];
}
