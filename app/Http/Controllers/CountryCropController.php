<?php

namespace App\Http\Controllers;

use App\Models\CountryCrop;
use Illuminate\Http\Request;

class CountryCropController extends Controller
{
    public function show(){
        $ccrops=CountryCrop::all();
        return response()->json($ccrops);
    }
}
