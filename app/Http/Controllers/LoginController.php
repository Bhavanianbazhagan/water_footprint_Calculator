<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index(){

        if(Auth::id()){
            $user_type=Auth()->user()->usertype;
            if($user_type=="admin"){
                return view('admin.adminhome');
            }elseif($user_type=="user"){
                return view('user.userhome');
            }else{
                return redirect()->back();
            }
        }
    }
    // public function nextpage(){
    //     if(Auth::id()){
    //         $user_type=Auth()->user()->usertype;
    //         if($user_type=="user")
    //         {
    //             return view('admin.userhome');
    //         }
    //     }
    // }
}
