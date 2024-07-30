<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormDKController extends Controller
{
    public function registerGet(){
        return view('register');
    }

    public function registerPost(Request $request){
        return var_dump($request->all());
    }
}
