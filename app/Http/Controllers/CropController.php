<?php

namespace App\Http\Controllers;
use App\Models\Crop;
use Illuminate\Http\Request;


class CropController extends Controller
{
    //
    public function show(){

        $crops=Crop::all();
        return response()->json($crops);

    }

}
