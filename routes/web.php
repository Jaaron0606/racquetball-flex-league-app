<?php

Route::get('/', function () {
  return view('welcome');
});

Route::post('/login/custom', [
  'uses' => 'LoginController@login',
  'as' => 'login.custom'
  ]);

Route::group(['middleware'=> 'auth'], function(){
  
  Route::get('/scoreboard', function(){
    return view('scoreboard');
  })->name('scoreboard');
  
  Route::get('/dashboard', function(){
    return view('adminHome');
  })->name('dashboard');
  
  Route::resource('matches', 'MatchController');
});
Route::resource('/users', 'UsersController');
