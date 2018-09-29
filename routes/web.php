<?php

Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::post('/login/custom', [
  'uses' => 'LoginController@login',
  'as' => 'login.custom'
  ]);

Route::get('/home', 'loginController@index')->name('home');

Route::group(['middleware'=> 'auth'], function(){
  
  Route::get('/scoreboard', function(){
    return view('scoreboard');
  })->name('scoreboard');
  
  
  Route::get('/dashboard', function(){
    return view('adminHome');
  })->name('dashboard');
  

  Route::resource('/users', 'UsersController');

  Route::resource('matches', 'MatchController');
});

