<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function getlogin(){
    	return view('client.login');
    }

    public function postlogin(Request $request){

        
    	$email = $request->email;
    	$password = $request->password;
        
    	if (Auth::attempt(['email' => $email, 'password' => $password])) 
    	{
                       
            return redirect()->route('home');    	
    	}
    	else
    	{
    		return redirect()->back();
    	}
    }

    public function getlogout(){
        Auth::logout();

        return redirect()->route('home');
    }
}
