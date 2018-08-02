<php
use Auth;
use App\User; 


?>


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
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
              <h5 class="card-title">Info card title</h5>
              <p><?php 
              $players = App\User::all();
              ?>
              <table>
                <tr>
                <th>Name</th>
                <th>Admin</th>
                <th>Email Address</th>
                </tr>
    <?php foreach($players as $key=>$value): ?>
    <tr>
        <td><?php echo $value['name']; ?></td>
        <td><button type='submit' onclick="yesorno" value="<?php $value['admin'] ?>"><?php
        
        $uservalue = $value['admin'];
          //$uservalue->yes_or_no();
    
        if ($uservalue == 1)
          {echo "yes";}
          else {echo "no";}
          
        //function yesorno()
          //{}
          
          
        ?></button></td>
        <td><?php echo $value['email']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
      </div>

      <!--
        User match history block: Shows the users individual matches,
        sorted by schedule week (earliest first). The user can see the
        her match score and her opponent's match score, as well as an
        edit button that links to the updateScores form.
        
        Matches without scores yet reported are clearly marked.
      -->
    </div>
  </body>
</html>
