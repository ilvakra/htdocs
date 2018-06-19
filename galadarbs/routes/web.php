<?php

use App\User;
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



Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/login', function(){
	return view('auth/login');
})->name('auth.login');


Route::get('/login2', 'MyController@index');



Route::post('/login', function(){

	$user = ( Auth::attempt(
		[
		'email'	=> $_POST['email'],
		'password'	=> $_POST['password']
		]
	) );

	if( isset($user) ){
		dd($user);
		return 'You authed in!';	
	}
	else
	{
		return redirect()
				->back()
				->withInput()
				->with(['error' => 'Nepareizs e-pasts vai parole!']);
	}
	
});

Route::get('/register', function(){
	return view('auth/register');
})->name('auth.register');

Route::post('/register', function(){

	// var_dump($_POST);
	// echo($_POST['email']);

	$existing = User::where('email', '=', $_POST['email'])->count();

	if($_POST['password'] !== $_POST['password_confirmation']){
		$error = 'Paroles nesakrīt!';
	}
	else if($existing>0){
		$error = 'Nederīgs e-pasts!';
	}
	if(isset($error)){
		return redirect()
				->back()
				->withInput()
				->with(['error' => $error]);
	}

	$user = new User();
	$user->name = $_POST['name'];
	$user->email = $_POST['email'];
	$user->password = $_POST['password'];
	$user->save();

	return redirect( route('auth.login') );
});


Route::get('/about', function(){
	return 'about';
})->name('about');

Route::get('/carreers', function(){
	return 'carreers';
})->name('carreers');

Route::resource('tasks', 'TaskController');
Route::post('/tasks/search', 'TaskController@search')->name('tasks.search');