<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'fname',
    	'mname',
    	'lname',
    	'date',
    	'gender',
    	'fathers_name',
    	'mothers_name',
    	'marital',
    	'tribe',
    	'clan',
    	'district',
    	'division',
    	'constituency',
    	'location',
    	'sub_location',
    	'village',
    	'home_address',
        'occupation',
    	'image'

    ];
}
