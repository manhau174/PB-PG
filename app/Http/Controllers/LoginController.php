<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\User;

class LoginController extends Controller
{   
     protected $redirectTo = 'admin/';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    
    public function getLogin() {
    	return view('loginAdmin');
    }
    public function postLogin(Request $request) {
    	$rules = [
    		'email' =>'required|email',
    		'password' => 'required|min:6'
    	];
    	$messages = [
    		'email.required' => 'Email là trường bắt buộc',
    		'email.email' => 'Email không đúng định dạng',
    		'password.required' => 'Mật khẩu là trường bắt buộc',
    		'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);

    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
    		
    		$email = $request->email;
    		$password = $request->password;


    		$user = User::getUserBy($email);
    		
       		if( Auth::attempt(['email' => $email, 'password' =>$password, 'permission' => 1]) ) {
    			return redirect()->intended('accept');

       		if( Auth::attempt(['email' => $email, 'password' =>$password, 'permission' => 1]) ) {
    			return redirect()->intended('admin/user');

    		} else {
    			$errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
    			return redirect()->back()->withInput()->withErrors($errors);
    		}
    	}
    }
}

    public function getlogout(){
        Auth::logout();

        return redirect()->route('login.admin');
    }
}