<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatchController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $user = Auth::user();
    $matches = $user->matches;
    
    $viewArray = Array();
    
    foreach ($matches as $match) {
    $new = ['id' => $match->id];
    
    if ($match->player_one_id == $user->id) {
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
    
    return view('matches', ['matches' => $viewArray]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Match  $match
   * @return \Illuminate\Http\Response
   */
  public function show(Match $match)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Match  $match
   * @return \Illuminate\Http\Response
   */
  public function edit(Match $match)
  {
    $games = $match->games->toArray();
    return view('updateScores', compact('match', 'games'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Match  $match
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Match $match)
  {
    $games = $match->games;
    
    // Calculate match total
    $p1_total = 0;
    $p2_total = 0;
    
    foreach($games as $index => $game) {
      $p1_score = $request->game[$index]['player_one_score'];
      $p2_score = $request->game[$index]['player_two_score'];
      
      // Update Games model
      $game->player_one_score = $p1_score;
      $game->player_two_score = $p2_score;
      $game->save();
      
      // Add 5 points to game winner and add to match total
      $p1_score > $p2_score ? $p1_score += 5 : $p2_score += 5;
      $p1_total += $p1_score;
      $p2_total += $p2_score;
    }
    
    // Update Match model
    $match->player_one_total = $p1_total;
    $match->player_two_total = $p2_total;
    $match->save();
    
    return redirect('matches');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Match  $match
   * @return \Illuminate\Http\Response
   */
  public function destroy(Match $match)
  {
    //
  }
}
