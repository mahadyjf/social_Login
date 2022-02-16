<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function HomeIndex(Request $request){
      $token = $request->session()->has('token');
      if($token == true){
        return view('/dashboard');
      }else {
        return view('/home');
      }
    }
}
