<php
use Auth;
use App\User; 
use App\css.scss
?>

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
      <div class="container">
        <button><a href ="/dashboard">Return to Administrator Dashboard</a></button>
       <button><a href = "/users">Return to list of Players</a></button>
              <h5 class="card-title">Create User</h5>
              <p>
              <table border = "1">
    <tr>
        {!! Form::open(['action' => 'UsersController@store', 'method' => 'POST']) !!}
                  <td class ="form-group">
                    {{Form::label('name', 'name')}}
                  {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
                  </td>
                  <td class ="form-group">
                    {{Form::label('admin', 'Administrator')}}
                  {{Form::text('admin', '', ['class' => 'form-control', 'placeholder' => 'Administrator'])}}
                  </td>
                  <td class ="form-group">
                    {{Form::label('email', 'Email')}}
                  {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
                  </td>
                  <td class ="form-group">
                    {{Form::label('password', 'Password')}}
                  {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'password'])}}
                  </td>
                  {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                  {!! Form::close() !!}
    </tr>
</table>
      </div>
    </div>
  </body>
</html>
@endsection