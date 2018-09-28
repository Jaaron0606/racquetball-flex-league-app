<?php

Route::get('/', function () {
  return view('welcome');
});

Route::resource('/users', 'UsersController');
Auth::routes();

Route::post('/login/custom', [
  'uses' => 'LoginController@login',
  'as' => 'login.custom'
  ]);

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> 'auth'], function(){
  
  Route::get('/home', function(){
    return view('userHome');
  })->name('home');
  
  Route::get('/dashboard', function(){
    return view('adminHome');
  })->name('dashboard');
  
  Route::resource('matches', 'MatchController');
});

// What is this?
Route::get('/players', function(){
    return view('adminplayers');
});

Route::get('/test', function () {
  return view('userHome');
});