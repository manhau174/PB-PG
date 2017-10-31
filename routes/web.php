<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','IndexController@showAll')->name('home');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/recruitment', function () {
    return view('recruitment');
})->name('recruitment');

Route::get('/pb', function () {
    return view('pb');
})->name('pb');

Route::get('/pg', function () {
    return view('pg');
})->name('pg');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// Route::get('user', 'UserController@index');

Route::get('/dashbord',function(){
	return view('dashbord', ['content' => 'Dashbord']);
})->name('admin');



Route::group(['prefix' => 'admin'], function(){

	/* route login admin*/
	Route::get('/', 'LoginController@getLogin')->name('login.admin');

	/* route login admin*/
	Route::post('/','LoginController@postLogin')->name('admin.login');


	/* route index admin*/
	Route::get('pbpg-admin', function(){
		return view('admin.dashboard');
	});

	Route::get('quan-ly-nguoi-dung',function(){
		return view('admin.userAdmin');
	})->name('admin.user');
	// Route::get('user', 'UserController@index');

	Route::get('logout','LoginController@getlogout')->name('admin.logout');
});

/* route login*/

Route::get('/login','client\LoginController@getlogin')->name('login');

Route::post('/login', 'client\LoginController@postlogin' )->name('postlogin');

/*end route login*/

/*route register*/
Route::get('register', 'client\RegisterClientController@getregister')->name('register.get');

Route::post('register', 'client\RegisterClientController@store')->name('register.store');

/*end route register*/

/*route logout*/

Route::get('logout','client\LoginController@getlogout')->name('logout');
Route::get('/users/getView/{str}','UserController@getView');
Route::get('/users/checkEmail/{email}','UserController@checkEmail');
Route::get('/pbpgs/checkEmail/{email}','PbPgController@checkEmail');
Route::get('/recruitments/checkEmail/{email}','RecruitmentController@checkEmail');
/*end route logout*/


Route::resource('users','UserController');
Route::resource('recruitments','RecruitmentController');
Route::resource('pbpgs','PbPgController');
Route::resource('posts','PostController');

