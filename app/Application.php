<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
    	'user_id',
    	'middle_name',
    	'last_name',
    	'dob',
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
    	'filename',

    ];
}
