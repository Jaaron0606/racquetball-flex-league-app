<?php

Route::get('/', function () {
  return view('welcome');
});

Route::post('/login/custom', [
  'uses' => 'LoginController@login',
  'as' => 'login.custom'
  ]);

Route::group(['middleware' => 'auth'], function() {
  // Logged in users only
  Route::get('/scoreboard', function(){
    return view('scoreboard');
  })->name('scoreboard');

  Route::resource('/users', 'UsersController');

  Route::resource('matches', 'MatchController');
});

Route::group(['middleware' => 'admin'], function() {
  // Admins only
  Route::get('/dashboard', function(){
    return view('adminHome');
  })->name('dashboard');
});
