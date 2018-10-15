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
      

      <!--
        Scoreboard block: Shows the current standings for the logged in
        users league, with the users name and point total highlighted.
        
        The scoreboard is sorted by current total points, highest 
        on top.
      -->
      
      <div class="container">
              <h5 class="card-title">Players Info Card</h5>
              <p>
              <?php 
              $players = App\User::all();
              
              function changeTheValue($key){
        if (value === 0) {
          $user = App\User::find($key);
          $user->admin= 1; 
          $user->save;
        }
              }
              ?>
              <table border = "1">
                <tr>
                <th>Name</th>
                <th>Administrator</th>
                <th>Email Address</th>
                <th>ID</th>
                <th>User</th> 
                <th>HI</th>
                </tr>
    <tr>
        <td><?php echo $oneplayer['name']; ?></td>
        <td><?php $oneplayer['admin'];
        
        $uservalue = $oneplayer['admin'];
          //$uservalue->yes_or_no();
    
        if ($uservalue == 1)
          {echo "Yes";}
          else {echo "No";}

        ?></button></td>
        <td><?php echo $oneplayer['email']; ?></td>
        <td><?php echo $oneplayer['id']; ?></td>
        <td><a href = "/users">all users</a></td>
    </tr>
</table>
      </div>
    </div>
  </body>
</html>
@endsection