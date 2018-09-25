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
    
    <div class="container">
      <div class="card-deck">
        <div class="card border-primary mb-3">
          <div class="card-header">Header</div>
          <div class="card-body text-primary">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card border-secondary mb-3">
          <div class="card-header">Header</div>
          <div class="card-body text-secondary">
            <h5 class="card-title">Secondary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card border-success mb-3">
          <div class="card-header">Header</div>
          <div class="card-body text-success">
            <h5 class="card-title">Success card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card border-danger mb-3">
          <div class="card-header">Header</div>
          <div class="card-body text-danger">
            <h5 class="card-title">Danger card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card border-warning mb-3">
          <div class="card-header">Header</div>
          <div class="card-body text-warning">
            <h5 class="card-title">Warning card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card border-info mb-3">
          <div class="card-header">Header</div>
          <div class="card-body text-info">
            <h5 class="card-title">Info card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
  
        <div class="card border-dark mb-3">
          <div class="card-header border-dark">Open/A Singles</div>
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
          $games = \App\Game::all();
          
          $player_scores = [];
          
          foreach ($games as $game) {
            $p1 = $game->match->player_one;
            $p1_score = $game->player_one_score;
            $p2 = $game->match->player_two;
            $p2_score = $game->player_two_score;
            
            $p2_score > $p1_score ? $p2_score += 5 : $p1_score += 5;
            
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
        ?>
        
        <div class="card border-dark mb-3">
          <div class="card-header border-dark">Open/A Singles</div>
          <div class="card-body text-dark">
            <table>
              <tr class="card-title">
                <th>Player</th>
                <th>Score</th>
                <th>Games</th>
              </tr>
              
              @foreach (array_keys($player_scores) as $name)
                <tr class="card-text">
                  <td>{{ $name }}</td>
                  <td>{{ $player_scores[$name] }}</td>
                  <td>1 / 1</td>
                </tr>
              @endforeach
              
            </table>
          </div>
        </div>
        
        <div class="card border-light mb-3">
          <div class="card-header border-light">Header</div>
          <div class="card-body text-dark">
            <h5 class="card-title">Dark card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
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