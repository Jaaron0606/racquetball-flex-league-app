<php
use Auth;
use App\User; 
use App\css.scss
?>

@extends('layouts.app')
@section('content')
  <head>
    <title>Match Scores Update Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    <div class="content">
      <div class="container">
              <h5 class="card-title">Players Info Card</h5>
              <p>
      <button><a href ="/dashboard">Return to Administrator Dashboard</a></button>
      <button><a href = "/users">Return to list of Players</a></button>
        
       {!!Form::open(['action' => ['UsersController@update', $upplayer->id], 'method' => 'POST']) !!}
       
                  <td class ="form-group">
                    {{Form::label('name', 'name')}}
                    {{Form::text('name', $upplayer->name, ['class' => 'form-control', 'placeholder' => 'name'])}}
                  </td>
                  <td class ="form-group">
                    {{Form::label('admin', 'Administrator')}}
                  {{Form::text('admin', $upplayer->admin, ['class' => 'form-control', 'placeholder' => 'admin'])}}
                  </td>
                  <td class ="form-group">
                    {{Form::label('email', 'Email')}}
                  {{Form::text('email', $upplayer->email, ['class' => 'form-control', 'placeholder' => 'email'])}}
                  </td>
                  <!--<td class ="form-group">-->
                  <!--  {{Form::label('password', 'Password')}}-->
                  <!--{{Form::text('password', $upplayer->password, ['class' => 'form-control', 'placeholder' => 'password'])}}-->
                  <!--</td>-->
                  {{Form::hidden('_method', 'PUT')}}
                  {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                  {!! Form::close() !!}
    </p>
    
      </div>
    </div>
  </body>
@endsection