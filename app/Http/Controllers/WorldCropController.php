<?php

namespace App\Http\Controllers;

use App\Models\WorldCrop;
use Illuminate\Http\Request;

class WorldCropController extends Controller
{

    public function show(){
        $worldcrp=WorldCrop::all();
        return response()->json($worldcrp);
    }
}
