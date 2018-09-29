@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th></th>
        <th class="text-center">{{ \App\User::find($match->player_one_id)->name }}</th>
        <th class="text-center">{{ \App\User::find($match->player_two_id)->name }}</th>
      </tr>
    </thead>
    
    <tbody>
      @foreach($games as $id => $game)
      <tr>
        <td class="text-center">Game {{ $id + 1 }}</td>
        <td class="text-center">{{ $game['player_one_score'] }}</td>
        <td class="text-center">{{ $game['player_two_score'] }}</td>
      </tr>
      @endforeach
      
      <!--Match total at the bottom of game scores-->
      <tr class="table-info">
        <td class="text-center">Match total</td>
        <td class="text-center">{{$match['player_one_total']}}</td>
        <td class="text-center">{{$match['player_two_total']}}</td>
      </tr>
    </tbody>
  </table>

  <div class="row">
    <div class="mx-auto">
      <a href="{{ route('matches.index') }}" class="btn btn-secondary">Back</a>
    </div>
  </div>
</div>
@endsection