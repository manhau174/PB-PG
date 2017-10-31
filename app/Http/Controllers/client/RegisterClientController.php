<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RegisterClientController extends Controller
{

	public function getregister(){
		return view('client.register');
	}


    public function store(Request $request){

        // dd($request->all());
    	User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'permission' => $request->permission,
    		'password' => bcrypt($request->password)
    	]);

    	return redirect()->route('home');
    }
}
