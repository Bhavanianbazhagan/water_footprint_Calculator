<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    use HasFactory;

    protected $table = 'crops';

    protected $fillable= [

        'cropID',
        'name',
        'level',
        'level1',
        'level2',
        'level3',
        'level4'

    ];
}
