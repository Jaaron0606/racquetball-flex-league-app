@extends('layouts.app')

@section('content')
<div class="content">
  <div class="title m-b-md">
    Fall 2018 Flex League
  </div>

  <!--
    Scoreboard block: Shows the current standings for the logged in
    users league, with the users name and point total highlighted.
    
    The scoreboard is sorted by current total points, highest 
    on top.
  -->
  
  <div class="container" id="scoreboard">
    <div class="card-deck">
    
      <?php
        $leagueMatches = \App\Match::all();
        $leagueDivs = $leagueMatches->unique('division_name');
        $divisions = Array();
        
        foreach ($leagueDivs as $leagueDiv) {
          array_push($divisions, $leagueDiv->division_name);
        }
        
        $scoreboard = Array();
        
        foreach ($divisions as $division) {
          $matches = $leagueMatches->where('division_name', $division)->all();
          $player_scores = Array();
          
          foreach ($matches as $match) {
            $p1 = $match->player_one_id;
            $p1_score = $match->player_one_total;
            $p2 = $match->player_two_id;
            $p2_score = $match->player_two_total;
            
            if (array_key_exists($p1, $player_scores)) {
              $player_scores[$p1] += $p1_score;
            } else {
              $player_scores[$p1] = $p1_score;
            }
            
            if (array_key_exists($p2, $player_scores)) {
              $player_scores[$p2] += $p2_score;
            } else {
              $player_scores[$p2] = $p2_score;
            }
          }
          
          arsort($player_scores);
          $scoreboard[$division] = $player_scores;
        }
        
      ?>
      
      @foreach ($scoreboard as $division_name => $division_totals)
        <div class="card border-dark mb-3">
          <div class="card-header border-dark">{{ $division_name }}</div>
          <div class="card-body text-dark">
            <table class="table table-sm">
              <tr class="card-title">
                <th>#</th>
                <th>Player</th>
                <th>Points</th>
              </tr>
              
              @foreach ($division_totals as $player_id => $total)
                <tr class="card-text">
                  <td>{{ array_search($player_id, array_keys($division_totals)) + 1 }}</td>
                  <td>{{ \App\User::find($player_id)->name }}</td>
                  <td>{{ $total }}</td>
                </tr>
              @endforeach
              
            </table>
          </div>
        </div>  
      @endforeach
    </div>
  </div>
</div>
@endsection