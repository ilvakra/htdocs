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
function navigation(){
	$navigation=[
	    'welcome'=> route('home'), 
	    'login'=> route('auth.login'), 
	    'carreers'=> route('carreers'), 
	    'about'=> route('about')
	];

	return $navigation;
}


Route::get('/', function () {

	

    return view('welcome', ['navigation' => navigation(), 'name'=>'rcs']);

})->name('home');


Route::get('/login', function(){
	return view('auth/login', ['navigation' => navigation(), 'name'=>'rcs']);
})->name('auth.login');

Route::get('/about', function(){
	return 'about';
})->name('about');

Route::get('/carreers', function(){
	return 'carreers';
})->name('carreers');
