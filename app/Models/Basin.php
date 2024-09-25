<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basin extends Model
{
    use HasFactory;

    protected $table='basins';

    protected $fillable=[
        'basinID',
        'name',
        'area',
        'blueAvailabilities',
        'blueFootprints',
        'allFootprints',
        'envelope'

    ];
}
