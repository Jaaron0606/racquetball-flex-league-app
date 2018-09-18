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

/**
 * This serves as the landing page for the flex leagues. It shows general
 * information about the the racquetball leagues, sign ups, etc. It should show
 * the current league standings as well.
 * 
 */
Route::get('/', function () {
  return view('welcome');
});



/** views-scaffold
 * This route shows the user her current league rankings, with her name and
 * current point total highlighted. Underneath the ranking table, the she can
 * see individual match and game scores, with the ability to edit. 
 * 
 * This should be shown as a redirect after logging in, and should have an
 * an option to return to the main landing page.
 */
Route::get('/test', function () {
  return view('userHome');
});

/**
 * This route brings the user to a simple form for updating the game scores for
 * a single match. This view should probably by accessible only by the model
 * controller for the games table.
 * 
 * @params: match to update
 */
Route::get('/update', function () {
  return view('updateScores');
});

/**
 * This route registers the database update routes for the games model.
 */ 
Route::resource('games', 'GameController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * This route is for testing the user match view.
 */
Route::get('/matches', function() {
  $cr8n = \App\User::find(6);
  $matches = $cr8n->matches;
  
  $viewArray = [];
  
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