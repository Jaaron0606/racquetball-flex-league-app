<php
use Auth;
use App\User;
use App\css.scss
?>

@extends('layouts.app')
@section('content')
  <head>
    <title>Update Player</title>
    <!--<meta name="csrf-token" content="{{ csrf_token() }}">-->
  </head>
  <body>
    <div class="content">
      <div class="container">
        <h5 class="card-title">Change Password</h5>
        <p>
                {!!Form::open(['action' => ['UsersController@updatePassword', $upplayer->id], 'method' => 'POST']) !!}
                  
                  <td class ="form-group">
                    <!--<form method="post" name="name">Name</form>-->
                    <!--  <input type="text" name="name" value=""></input>-->
                    {{Form::hidden('name', 'name')}}
                    {{Form::hidden('name', $upplayer->name, ['class' => 'form-control', 'placeholder' => 'name'])}}
                  </td>
                
                @if(Auth::user()->id == $upplayer->id)
                   <td class ="form-group">
                    {{Form::hidden('admin', 'Administrator')}}
                  <!--{{Form::text('admin', $upplayer->admin, ['class' => 'form-control', 'placeholder' => 'admin'])}}-->
                  {{Form::hidden('admin', $upplayer->admin, ['class' => 'form-control', 'placeholder' => 'admin'])}}
                  </td>
                @else
                  <td class ="form-group">
                    {{Form::hidden('admin', 'Administrator')}}
                  <!--{{Form::text('admin', $upplayer->admin, ['class' => 'form-control', 'placeholder' => 'admin'])}}-->
                  {{Form::select('admin', array('1' => 'YES', '0' => 'NO'), ['class' => 'form-control', 'placeholder' => 'admin'])}}
                  </td>
                  @endif                  
                  
                  <td class ="form-group">
                    {{Form::hidden('email', 'Email')}}
                  {{Form::hidden('email', $upplayer->email, ['class' => 'form-control', 'placeholder' => 'email'])}}
                  </td>
                  <td class ="form-group">
                    <!--{{Form::label('password')}}-->
                  {{Form::text('password', '', ['class' => 'form-control', 'id'=> 'password', 'placeholder' => 'enter a  new password'])}}
                  </td>
                  <!--<td class ="form-group">-->
                  <!--  {{Form::label('password1', 'Confirm Password')}}-->
                  <!--{{Form::text('password', '', ['class' => 'form-control', 'id'=> 'password1', 'placeholder' => 'password'])}}-->
                  <!--</td>-->
                 
                  {{Form::hidden('_method', 'PUT')}}
                  {{Form::submit('Change Password', ['class' => 'btn btn-Success'])}}
                   {!! Form::close() !!}
    </p>
      </div>
    </div>
  </body>
@endsection