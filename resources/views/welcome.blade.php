<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Racquetball</title>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!-- Bootstrap Stuff -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  
    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
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
                margin-top:3rem;
            }
            .title {
                font-size: 4rem;
    
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
        </style>
    
    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <!--<a href="{{ url('/scoreboard') }}">Scoreboard</a>-->
                        <!--<a href="{{ url('/matches') }}">Matches</a>-->
                        <a href="https://www.sportsclubsc.com/">Sportsclub</a>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                        
                    @else
                        <!--<a href="{{ route('register') }}">Register</a>-->
                        <a href="https://www.sportsclubsc.com/">Sportsclub</a>
                        <a href="{{ route('login') }}">Player Login</a>
                        <!--<a href="{{ route('register') }}">Register</a>-->
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    Sportsclub Racquetball Flex League
                    </div>

                    <div class="container">
        <div class="card-deck">
          <div class="card border-primary mb-3">
            <div class="card-header">2018 Fall and Flex Leagues</div>
            <div class="card-body text-primary">
              <h5 class="card-title">Begins October 1</a></h5>
              <p class="card-text">Sign up to Play Singles or Doubles All Skills Welcome</a></p>
            <a href ="{{ URL::to('/flyers/2018Racquetfall.pdf') }}"><i class= "fas fa-file-pdf"></i></a>
            </div>
          </div>
          <div class="card border-secondary mb-3">
            <div class="card-header">2018 Fall and Flex Leagues Standing</div>
            <div class="card-body text-secondary">
              <h5 class="card-title">See Standings</h5>
              <p class="card-text">Click here to see the standing for the 2018 Leagues</p>
              <a href = "{{ url('/scoreboard') }}"><i class= "fas fa-chart-bar"></i></a>
            </div>
          </div>
          <div class="card border-success mb-3">
            <div class="card-header">Questions or Comments</div>
            <div class="card-body text-success">
              <h5 class="card-title">Please reach out to Lynette Froehlich</h5>
              <p class="card-text"></p> Send Lynette an email</p>
            <a href =""><i class="fas fa-envelope"></i></a>
            </div>
          </div>
    
                    <!-- Extra links -->
                    <!--<a href="https://laracasts.com">Laracasts</a>-->
                    <!--<a href="https://laravel-news.com">News</a>-->
                    <!--<a href="https://forge.laravel.com">Forge</a>-->
                    <!--<a href="https://github.com/laravel/laravel">GitHub</a>-->
                </div>
            </div>
          </div>
        </div>
        </div>
    </body>
</html>
