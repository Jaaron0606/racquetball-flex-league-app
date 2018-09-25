@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Update Match Score</h2><br/>
  <form method="POST" action="{{action('MatchController@update', $match)}}">
    @csrf
    <input name="_method" type="hidden" value="PATCH">
    
    <div class="row">
      <!-- Blank column to center -->
      <!--<div class="col-md"></div>-->
      
      <!-- Blank space over game numbers -->
      <div class="col-md-2 col-xs"></div>
      
      <div class="col-md-2 col-xs">{{\App\User::find($match->player_one_id)->name}}</div>
      <div class="col-md-2 col-xs">{{\App\User::find($match->player_two_id)->name}}</div>
      
      <!-- Blank column to center -->
      <!--<div class="col-md"></div>-->
    </div>
   
    <div class="row">
      <!-- Blank column to center -->
      <div class="col-md-3"></div>
      
      <div class="col-md-2 col-xs-4">Game 1</div>
      <div class="col-md-2 col-xs-4">
        <input type="number" max="15" min="0" class="form-control" 
          name="game[0][player_one_score]" value="{{$games[0]['player_one_score']}}">
      </div>
      <div class="col-md-2 col-xs-4">
        <input type="number" max="15" min="0" class="form-control" 
          name="game[0][player_two_score]" value="{{$games[0]['player_two_score']}}">
      </div>
    </div>  
      
    <div class="row">
      <!-- Blank column to center -->
      <div class="col-md-3"></div>
      
      <div class="col-md-2 col-xs-4">Game 2</div>
      <div class="col-md-2 col-xs-4">
        <input type="number" max="15" min="0" class="form-control" 
          name="game[1][player_one_score]" value="{{$games[1]['player_one_score']}}">
      </div>
      <div class="col-md-2 col-xs-4">
        <input type="number" max="15" min="0" class="form-control" 
          name="game[1][player_two_score]"  value="{{$games[1]['player_two_score']}}">
      </div>
    </div>
    
    <div class="row">
      <!-- Blank column to center -->
      <div class="col-md-3"></div>
      
      <div class="col-md-2 col-xs-4">Game 3</div>
      <div class="col-md-2 col-xs-4">
        <input type="number" max="11" min="0" class="form-control" 
          name="game[2][player_one_score]"  value="{{$games[2]['player_one_score']}}">
      </div>
      <div class="col-md-2 col-xs-4">
        <input type="number" max="11" min="0" class="form-control" 
          name="game[2][player_two_score]" value="{{$games[2]['player_two_score']}}">
      </div>
    </div>
      
    <div class="row" style="margin-top:10px">
      <!-- Blank column to center -->
      <div class="col-md-3"></div>
      
      <!-- Blank space over game numbers -->
      <div class="col-md-2 col-xs-4">Total</div>
      
      <div class="col-md-2 col-xs-4">Player</div>
      <div class="col-md-2 col-xs-4">Opponent</div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4" style="margin-top:30px">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
</div>
<!--
    Form block: x is user input block
    
    -----------------------------------------------
                Game1     Game2     Game3     Total
    User         x         x         x         Auto   
    Opponent     x         x         x         Auto 
    -----------------------------------------------
    
    Total is auto calculated based on form values, and includes the
    bonus 5 points for winning a game. 
    
    Submit button updates the database and returns the user to her 
    logged in landing page. This page should update with the new 
    score totals.
    
    Basic form validation:
        - no blanks
        - values between 0 and 15 for games 1 and 2
        - values between 0 and 11 for game 3
        - exactly one person will win each game (max score)
-->
@endsection