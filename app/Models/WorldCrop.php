<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorldCrop extends Model
{
    use HasFactory;

    protected $table='worldcrps';

    protected $fillable=[

        'cropID',
        'cropName',
        'greenWF',
        'greenWFFraction',
        'greenWFt',
        'blueWF',
        'blueWFFraction',
        'blueWFt',
        'greyWF',
        'greyWFFraction',
        'greyWFt',
        'wf',
        'wfFraction',
        'wft'

    ];
}
