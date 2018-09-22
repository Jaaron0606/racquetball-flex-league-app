<php
use Auth;
use App\User; 
use App\css.scss
?>

@extends('layouts.app')
@section('content')
  <head>
    <title>Match Scores Update Form</title>
  </head>
  <body>
    <div class="content">
      <div class="container">
              <h5 class="card-title">Players Info Card</h5>
              <p>
                   <button><a href ="/dashboard">Return to Administrator Dashboard</a></button>
                   <button><a href ="/users/create">Add user</a></button>
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
                <th>Update User info</th> 
                <th>Password</th>
                </tr>
    <?php foreach($players as $key=>$value): ?>
    <tr>
        <td><?php echo $value['name']; ?></td>
        <td><?php $value['admin'];
        
        $uservalue = $value['admin'];
          //$uservalue->yes_or_no();
    
        if ($uservalue == 1)
          {echo "Yes";}
          else {echo "No";}

        ?></button></td>
        <td><?php echo $value['email']; ?></td>
        <td><?php echo $value['id']; ?></td>
        <td><a href = "/users/<?php echo $value['id']; ?>/edit">edit user</a></td>
        <td><?php echo $value['password']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
      </div>
    </div>
  </body>

@endsection