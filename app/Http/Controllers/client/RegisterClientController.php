<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

use App\User;

class RegisterClientController extends Controller
{

	public function getregister(){
		return view('client.register');
	}


    public function store(Request $request){

    	User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'permission' => $request->permission,
    		'password' => bcrypt($request->password)
    	]);

    	return redirect()->route('postlogin');
    }
}
