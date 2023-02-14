<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cobacontroller extends Controller
{
    function index(){
    return "Farhan Abdillah";
    }

    function login(){
        return view('login');
    }

  

    public function dashboard(Request $request){
        dd($request->all());
    }
}


