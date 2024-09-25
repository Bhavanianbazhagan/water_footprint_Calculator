<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryCrop extends Model
{
    use HasFactory;

    protected $table='countrycrops';

    protected $fillable=[

        'countryID',
        'cropID',
        'countryName',
        'cropName',
        'population',
        'greenWF',
        'greenWFFraction',
        'greenWFt',
        'blueWF',
        'blueWFFraction',
        'blueWFt',
        'greenBlueWFt',
        'greenBlueWFt20',
        'greenBlueWFtExcess',
        'greyWF',
        'greyWFFraction',
        'greyWFt',
        'greyWFt20',
        'greyWFtExcess',
        'wf',
        'wfFraction'
    ];
}
