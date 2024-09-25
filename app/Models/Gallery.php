<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    // protected $model = Gallery::class;

    // public function definition()
    // {
    //     $filePath = $this->faker->image(storage_path('images/apple.jpeg'), 640, 480, null, false);

    //     return [
    //         'image' => 'images/' . basename($filePath)
    //     ];
    // }
    protected $fillable=[
        'image'
    ];
}
