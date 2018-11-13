@extends('layouts.app')
@include('inc.messages')
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

  </head>
  <body>
    <div class="content">
       <h1> Administration Dashboard</h1>
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
            <div class="card-header">Create League</div>
            <div class="card-body text-secondary">
              <h5 class="card-title">Under Construction</h5>
              <p class="card-text">Create a league</p>
            </div>
          </div>
          <div class="card border-success mb-3">
            <div class="card-header">Edit Scoreboard</div>
            <div class="card-body text-success">
              <h5 class="card-title">Matches</h5>
              <p class="card-text">You can edit the scores of every match here</p>
            </div>
          </div>
          <div class="card border-danger mb-3">
            <div class="card-header">Pictures</div>
            <div class="card-body text-danger">
              <h5 class="card-title">Add and Remove photos</h5>
              <p class="card-text">Under Contruction</p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </body>
</html>

@endsection
