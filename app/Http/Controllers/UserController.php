<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public static function index(){
    	$user = User::getAll();
    	
    	return view('admin.userAdmin',['user' => $user]);
    }
}
