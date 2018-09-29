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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> 'auth'], function(){
  
  Route::get('/scoreboard', function(){
    return view('scoreboard');
  })->name('scoreboard');
  
  Route::get('/dashboard', function(){
    return view('adminHome');
  })->name('dashboard');
  
  Route::resource('matches', 'MatchController');
});