<?php

namespace App\Http\Controllers;

use App\Models\basincrop;
use Illuminate\Http\Request;

class BasincropController extends Controller
{
    //
    public function show(){
        $basincrp=basincrop::all();
        return response()->json($basincrp);
    }
}
