<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Match Scores Update Form</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            .row {
              margin-top: 5px;
              line-height: 30px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            
            <!-- create.blade.php -->

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  

    <div class="container">
      <h2>Update Match Score</h2><br/>
      <form method="post" action="{{url('passports')}}" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
          <!-- Blank column to center -->
          <div class="col-md-4"></div>
          
          <!-- Blank space over game numbers -->
          <div class="col-md-2 col-xs-4"></div>
          
          <div class="col-md-1 col-xs-4">Player</div>
          <div class="col-md-1 col-xs-4">Opponent</div>
        </div>
       
        <div class="row">
          <!-- Blank column to center -->
          <div class="col-md-4"></div>
          
          <div class="col-md-2 col-xs-4">Game 1</div>
          <div class="col-md-1 col-xs-4">
            <input type="number" max="15" min="0" class="form-control" name="game1player1score">
          </div>
          <div class="col-md-1 col-xs-4">
            <input type="number" max="15" min="0" class="form-control" name="game1player1score">
          </div>
        </div>  
          
        <div class="row">
          <!-- Blank column to center -->
          <div class="col-md-4"></div>
          
          <div class="col-md-2 col-xs-4">Game 2</div>
          <div class="col-md-1 col-xs-4">
            <input type="number" max="15" min="0" class="form-control" name="game1player1score">
          </div>
          <div class="col-md-1 col-xs-4">
            <input type="number" max="15" min="0" class="form-control" name="game1player1score">
          </div>
        </div>
        
        <div class="row">
          <!-- Blank column to center -->
          <div class="col-md-4"></div>
          
          <div class="col-md-2 col-xs-4">Game 3</div>
          <div class="col-md-1 col-xs-4">
            <input type="number" max="11" min="0" class="form-control" name="game1player1score">
          </div>
          <div class="col-md-1 col-xs-4">
            <input type="number" max="11" min="0" class="form-control" name="game1player1score">
          </div>
        </div>
          
        <div class="row" style="margin-top:10px">
          <!-- Blank column to center -->
          <div class="col-md-4"></div>
          
          <!-- Blank space over game numbers -->
          <div class="col-md-2 col-xs-4">Total</div>
          
          <div class="col-md-1 col-xs-4">Player</div>
          <div class="col-md-1 col-xs-4">Opponent</div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:30px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>

            <!--
                Form block: x is user input block
                
                -----------------------------------------------
                            Game1     Game2     Game3     Total
                User         x         x         x         Auto   
                Opponent     x         x         x         Auto 
                -----------------------------------------------
                
                Total is auto calculated based on form values, and includes the
                bonus 5 points for winning a game. 
                
                Submit button updates the database and returns the user to her 
                logged in landing page. This page should update with the new 
                score totals.
                
                Basic form validation:
                    - no blanks
                    - values between 0 and 15 for games 1 and 2
                    - values between 0 and 11 for game 3
                    - exactly one person will win each game (max score)
            -->
        </div>
    </body>
</html>
