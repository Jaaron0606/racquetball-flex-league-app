@extends('layouts.app')

@section('content')
  <div class="content">
    <div class="title m-b-md">
      Current League Performance
    </div>
  
    <!--
      Scoreboard block: Shows the current standings for the logged in
      users league, with the users name and point total highlighted.
      
      The scoreboard is sorted by current total points, highest 
      on top.
    -->
    
    <div class="container" id="scoreboard">
      <div class="card-deck">
        <div class="card border-dark mb-3">
          <div class="card-header border-dark">Hard Coded Division</div>
          <div class="card-body text-dark">
            <table>
              <tr class="card-title">
                <th>Player</th>
                <th>Score</th>
                <th>Games</th>
              </tr>
              <tr class="card-text">
                <td>Kooper</td>
                <td>162</td>
                <td>3 / 7</td>
              </tr>
              <tr class="card-text">
                <td>John</td>
                <td>121</td>
                <td>3 / 7</td>
              </tr>
              <tr class="card-text">
                <td>Freddy</td>
                <td>90</td>
                <td>2 / 7</td>
              </tr>
            </table>
          </div>
        </div>
        
        <?php
          // $matches = \App\Match::all();
          $leagueMatches = \App\Match::where('league_name', 'Test League')->get();
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
          
          // dd($scoreboard);
        ?>
        
        @foreach (array_keys($scoreboard) as $division)
          <div class="card border-dark mb-3">
            <div class="card-header border-dark">{{ $division }}</div>
            <div class="card-body text-dark">
              <table>
                <tr class="card-title">
                  <th>Player</th>
                  <th>Score</th>
                  <th>Games</th>
                </tr>
                
                @foreach (array_keys($scoreboard[$division]) as $id)
                  <tr class="card-text">
                    <td>{{ \App\User::find($id)->name }}</td>
                    <td>{{ $scoreboard[$division][$id] }}</td>
                    <td>GAMES PLAYED?</td>
                  </tr>
                @endforeach
                
              </table>
            </div>
          </div>
        @endforeach
        
      </div>
    </div>
  
    <!--
      User match history block: Shows the users individual matches,
      sorted by schedule week (earliest first). The user can see the
      her match score and her opponent's match score, as well as an
      edit button that links to the updateScores form.
      
      Matches without scores yet reported are clearly marked.
    -->
  </div>
@endsection