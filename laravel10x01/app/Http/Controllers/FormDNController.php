<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormDNController extends Controller
{
    public function Login(){
        return view('login');
    }

    public function storeSession(Request $request){
        if($request->has('btnSave')){
            $request->session()->put('username',$request->username);
            $request->session()->put('pass',$request->pass);
        }
        echo "Username: " . $request->session()->get('username');
        echo "<br>";
        echo "Password: " . $request->session()->get('pass');
    }

    
}
