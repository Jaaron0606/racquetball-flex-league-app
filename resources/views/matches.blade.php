@extends('layouts.app')

@section('content')
<div class="container">
  <br />
  <!--@if (\Session::has('success'))-->
  <!--  <div class="alert alert-success">-->
  <!--    <p>{{ \Session::get('success') }}</p>-->
  <!--  </div><br />-->
  <!-- @endif-->
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Opponent</th>
        <!--<th>Date Updated</th>-->
        <th>Match Total</th>
        <th>Points Allowed</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($matches as $match)
      <!--@php-->
      <!--  $date=date('Y-m-d', $passport['date']);-->
      <!--  @endphp-->
      <tr>
        <td>{{$match['id']}}</td>
        <td>{{$match['opponentName']}}</td>
        <td>{{$match['playerTotal']}}</td>
        <td>{{$match['opponentTotal']}}</td>
        
        <td><a href="{{action('MatchController@edit', $match['id'])}}" class="btn btn-info">Edit</a></td>
        <!--<td>-->
          <!--<form action="{{--action('PassportController@destroy', $passport['id'])--}}" method="post">-->
          <!--  @csrf-->
          <!--  <input name="_method" type="hidden" value="DELETE">-->
          <!--  <button class="btn btn-danger" type="submit">Delete</button>-->
          <!--</form>-->
        <!--</td>-->
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection