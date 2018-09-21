<?php

Route::get('/', function () {
  return view('welcome');
});


Route::get('/test', function () {
  // return view('userHome');
  return view('edit');
});

Route::get('/update', function () {
  // Test by passing in known data
  $match = \App\Match::find(2);
  $games = $match->games->toArray();

  return view('updateScores', compact('match', 'games'));
});

/**
 * This route registers the database update routes for the games model.
 */ 
Route::resource('matches', 'MatchController');
Route::post('/login/custom', [
  'uses' => 'LoginController@login',
  'as' => 'login.custom'
  ]);



Route::resource('games', 'GameController');

Auth::routes();

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
