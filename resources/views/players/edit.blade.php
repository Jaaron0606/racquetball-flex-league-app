<php
use Auth;
use App\User;
use App\css.scss
?>

@extends('layouts.app')
@section('content')
  <head>
    <title>Update Player</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    <div class="content">
      <div class="container">
      @if(Auth::user()->id == $upplayer->id)
        <h5 class="card-title">Profile</h5>
      @else 
      <h5 class="card-title">Players Info Card</h5>
              <p>
      <button><a href ="/dashboard">Return to Administrator Dashboard</a></button>
      <button><a href = "/users">Return to list of Players</a></button>
      @endif
        <p>
                {!!Form::open(['action' => ['UsersController@update', $upplayer->id], 'method' => 'POST']) !!}
                  
                  <td class ="form-group">
                    <!--<form method="post" name="name">Name</form>-->
                    <!--  <input type="text" name="name" value=""></input>-->
                    {{Form::label('name', 'name')}}
                    {{Form::text('name', $upplayer->name, ['class' => 'form-control', 'placeholder' => 'name'])}}
                  </td>
                
                @if(Auth::user()->id == $upplayer->id)
                   <td class ="form-group">
                    {{Form::label('admin', 'Administrator')}}
                  <!--{{Form::text('admin', $upplayer->admin, ['class' => 'form-control', 'placeholder' => 'admin'])}}-->
                  {{Form::hidden('admin', $upplayer->admin, ['class' => 'form-control', 'placeholder' => 'admin'])}}
                  </td>
                @else
                  <td class ="form-group">
                    {{Form::label('admin', 'Administrator')}}
                  <!--{{Form::text('admin', $upplayer->admin, ['class' => 'form-control', 'placeholder' => 'admin'])}}-->
                  {{Form::select('admin', array('1' => 'YES', '0' => 'NO'), ['class' => 'form-control', 'placeholder' => 'admin'])}}
                  </td>
                  @endif                  
                  
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