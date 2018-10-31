<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
class HomeController extends Controller
{
    public function login(){
    	return view('login');
    }

    public function loginStore(Request $request){
    	$email    =  $request->email;
    	$password = $request->password;

    	$user = User::where('email','=',$email)
    				->where('password','=',$password)
    				->first();
    	if($user) {
    		Session::put('userid',$user->id);
            Session::put('useremail',$user->email);

    		echo 'User found';
    	}
    	else {
    		echo 'User Not found';
    	}
    }

    public function logout(Request $request){
    	if($request->session()->has('userid')){
    		echo 'Session found';
    		$request->session()->flush();
    	}
    	else{
    		echo 'Session not found';
    	}
    }
}
