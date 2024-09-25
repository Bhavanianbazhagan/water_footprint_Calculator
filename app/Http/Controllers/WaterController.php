<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MOdels\Gallery;


class WaterController extends Controller
{
    //
    public function water(){
        return view("home.waterfootprint");
    }
    public function Assessment(){
        return view("home.waterAssessment");
    }

    // public function gal(){
    //     $gallery = Gallery::all();
    //     if ($gallery) {
    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Gallery fetched successfully',
    //             'gallery' => $gallery
    //         ]);
    //     } else {
    //         return view('home.Gallery', compact('gallery'));
    //     }
    // }
    public function gal(){
        $gallery=Gallery::all();
        // select('image')->get();
        // $gallery1=Gallery::select('description')->get();
        return view('home.Gallery',compact('gallery'));
    }


    public function freq(){
        return view("home.Frequently");
    }
    public function lexi(){
        return view("home.lexicon");
    }
    public function cont(){
        return view("home.contact");
    }
    public function time(){
        return view("home.timeforaction");
    }
    public function extend(){
        return view("home.extended");
    }
    public function ass(){
        return view("home.assess");
    }
    public function company(){
        return view("home.companey");
    }
}
