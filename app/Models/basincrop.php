<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basincrop extends Model
{
    use HasFactory;

    protected $table='basincrops';

    protected $fillable=[
        'basinID',
        'basinName',
        'cropID',
        'cropName',
        'greenWF',
        'greenWFFraction',
        'blueWF',
        'blueWFFraction',
        'greyWF',
        'greyWFFraction',
        'wf',
        'wfFraction'

    ];
}
