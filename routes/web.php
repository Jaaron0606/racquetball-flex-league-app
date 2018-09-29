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

Route::post('/login/custom', [
  'uses' => 'LoginController@login',
  'as' => 'login.custom'
  ]);



Route::resource('games', 'GameController');
/**
 * This route registers the database update routes for the games model.
 */ 
Route::resource('matches', 'MatchController');

//Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> 'auth'], function(){
  
  Route::get('/home', function(){
    return view('userHome');
  })->name('home');
  
  Route::get('/dashboard', function(){
    return view('adminHome');
  })->name('dashboard');
  

});

// Route::get('/players', function(){
//     return view('adminplayers');
// });

Route::resource('/users', 'UsersController');
/**
 * This route is for testing the user match view.
 */
Route::get('/matches', function() {
  $cr8n = \App\User::find(6);
  $matches = $cr8n->matches;
  
  $viewArray = Array();
  
  foreach ($matches as $match) {
    $new = ['id' => $match->id];
    
    if ($match->player_one_id == 6) {
      $new['opponentName'] = \App\User::find($match->player_two_id)->name;
      $new['playerTotal'] = $match->player_one_total;
      $new['opponentTotal'] = $match->player_two_total;
    } else {
      $new['opponentName'] = \App\User::find($match->player_one_id)->name;
      $new['playerTotal'] = $match->player_two_total;
      $new['opponentTotal'] = $match->player_one_total;
    }
    
    array_push($viewArray, $new);
  }
  
  return view('userMatches', ['matches' => $viewArray]);
});
