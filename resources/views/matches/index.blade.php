@extends('layouts.app')

@section('content')
<div class="container">
  <br />
  <!--@if (\Session::has('success'))-->
  <!--  <div class="alert alert-success">-->
  <!--    <p>{{ \Session::get('success') }}</p>-->
  <!--  </div><br />-->
  <!-- @endif-->
  
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th>Opponent</th>
        <th class="text-center">Your Total</th>
        <th class="text-center">Their Total</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    
    <tbody>
      @foreach($matches as $match)
      <tr>
        <td class="text-center">{{$match['id']}}</td>
        <td>{{$match['opponentName']}}</td>
        <td class="text-center">{{$match['playerTotal']}}</td>
        <td class="text-center">{{$match['opponentTotal']}}</td>
        
        <td align="center"><a href="{{action('MatchController@edit', $match['id'])}}" class="btn btn-info">Edit</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection