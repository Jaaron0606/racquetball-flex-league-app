<?php

Route::get('/', function () {
  return view('welcome');
});


Route::get('/test', function () {
  return view('userHome');
});

/**
 * This route registers the database routes for the matches model.
 */ 
Route::resource('matches', 'MatchController');
Route::post('/login/custom', [
  'uses' => 'LoginController@login',
  'as' => 'login.custom'
  ]);



Route::resource('games', 'GameController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> 'auth'], function(){
  
  $viewArray = Array();
  Route::get('/home', function(){
    return view('userHome');
  })->name('home');
  
  Route::get('/dashboard', function(){
    return view('adminHome');
  })->name('dashboard');
  

});

Route::get('/players', function(){
    return view('adminplayers');
});

Route::resource('/users', 'UsersController');
