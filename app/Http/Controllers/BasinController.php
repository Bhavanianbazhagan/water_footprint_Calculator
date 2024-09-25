<?php

namespace App\Http\Controllers;

use App\Models\Basin;
use Illuminate\Http\Request;

class BasinController extends Controller
{
    public function show(){
        $basin=Basin::all();
        return response()->json($basin);
    }
}
