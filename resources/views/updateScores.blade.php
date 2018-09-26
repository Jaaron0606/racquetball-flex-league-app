@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Update Match Score</h2>
  <br/>
  
  <form method="POST" action="{{ action('MatchController@update', $match) }}">
    @csrf
    <input name="_method" type="hidden" value="PATCH">
    
    <div class="form-group form-row">
      <div class="col-2"></div>
      <div class="col text-center">
        {{ \App\User::find($match->player_one_id)->name }}
      </div>
      <div class="col text-center">
        {{ \App\User::find($match->player_two_id)->name }}
      </div>
    </div>
    
    <div class="form-group form-row">
      <label class="col-2 col-form-label text-right">Game 1</label>
      <div class="col">
        <input type="number" max="15" min="0" class="form-control" 
          name="game[0][player_one_score]" 
          value="{{ $games[0]['player_one_score'] }}" required />
      </div>
      <div class="col">
        <input type="number" max="15" min="0" class="form-control" 
          name="game[0][player_two_score]" 
          value="{{ $games[0]['player_two_score'] }}" required />
      </div>
    </div>
    
    <div class="form-group form-row">
      <label class="col-2 col-form-label text-right">Game 2</label>
      <div class="col">
        <input type="number" max="15" min="0" class="form-control" 
          name="game[1][player_one_score]" 
          value="{{ $games[1]['player_one_score'] }}" required />
      </div>
      <div class="col">
        <input type="number" max="15" min="0" class="form-control" 
          name="game[1][player_two_score]" 
          value="{{ $games[1]['player_two_score'] }}" required />
      </div>
    </div>
    
    <div class="form-group form-row">
      <label class="col-2 col-form-label text-right">Game 3</label>
      <div class="col">
        <input type="number" max="11" min="0" class="form-control" 
          name="game[2][player_one_score]" 
          value="{{ $games[2]['player_one_score'] }}" required />
      </div>
      <div class="col">
        <input type="number" max="11" min="0" class="form-control" 
          name="game[2][player_two_score]" 
          value="{{ $games[2]['player_two_score'] }}" required />
      </div>
    </div>
    
    <!--<div class="form-group form-row">-->
    <!--  <label class="col-2 col-form-label text-right">Total</label>-->
    <!--  <div class="col text-center">AUTO Total</div>-->
    <!--  <div class="col text-center">AUTO Total</div>-->
    <!--</div>-->
    
    <div class="form-group form-row">
      <div class="mx-auto">
        <button type="submit" class="btn btn-primary">Submit scores</button>
        <a href="{{ route('matches.index') }}" class="btn btn-secondary">Back</a>
      </div>
    </div>
  </form>
  
  <!--Autosum script-->
  <!--<script type="text/javascript" src="{{ asset('js/sum.js') }}"></script>-->
</div>
@endsection