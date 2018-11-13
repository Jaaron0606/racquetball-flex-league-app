<?php
Auth::routes();

Route::get('/', function () {
  return view('welcome');
});
Auth::routes();
Route::get('/changepassword','UsersController@showChangePasswordForm');
Route::post('/login/custom', [
  'uses' => 'LoginController@login',
  'as' => 'login.custom'
  ]);

Route::get('/home', 'LoginController@login')->name('home');

Route::group(['middleware'=> 'auth'], function(){
  
  Route::get('/scoreboard', function(){
    return view('scoreboard');
  })->name('scoreboard');
  
  
  Route::get('/dashboard', function(){
    return view('adminHome');
  })->name('dashboard');
  Route::get('/users/{id}/changepassword','UsersController@showChangePasswordForm');
  Route::put('/users/{id}/updatePassword','UsersController@updatePassword');
  
  
  Route::resource('/users', 'UsersController');

  Route::resource('matches', 'MatchController');
});
