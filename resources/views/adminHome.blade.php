@extends('layouts.app')
@section('content')

<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Match Scores Update Form</title>

    <!-- Bootstrap Stuff -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    <!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
      .content {
        text-align: center;
      }

      .title {
        font-size: 84px;
      }

      .m-b-md {
        margin-bottom: 30px;
      }
    </style>
  </head>
  <body>
    <div class="content">
      <div class="title m-b-md">
      </div>
        Current League Performance
      <!--
        Scoreboard block: Shows the current standings for the logged in
        users league, with the users name and point total highlighted.
        
        The scoreboard is sorted by current total points, highest 
        on top.
      -->
      
      <div class="container">
        <div class="card-deck">
          <div class="card border-primary mb-3">
            <div class="card-header">Players</div>
            <div class="card-body text-primary">
              <h5 class="card-title"><a href="/users">List of Players</a></h5>
              <p class="card-text">A list of Users and Players</p>
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
            <div class="card-header">Players</div>
            <div class="card-body text-info">
              <h5 class="card-title">Info card title</h5>
              <p class="card-text">Click Here to edit users</p>
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
  </body>
</html>

@endsection
