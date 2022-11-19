<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistationController extends Controller{


    public function  index(){

     return view('form');
    }

    public function register(Request $request){

        $request->validate([
           'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',

        ]);

      echo "<pre>";
      print_r($request->all());
    }

}
