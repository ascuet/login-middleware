<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(){
    	return view('login');
    }

    public function loginStore(Request $request){
    	echo $request->email;
    	echo '<br>';
    	echo $request->password;
    }
}
