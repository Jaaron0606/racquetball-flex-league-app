<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Racquetball</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- style -->
        <link href="{{ URL::asset('css/raquetball.css') }}" rel="stylesheet" type="text/css" >
        <!-- Bootstrap Stuff -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/scoreboard') }}">Scoreboard</a>
                        <a href="{{ url('/matches') }}">Matches</a>
                    @else

                        <a href="https://www.sportsclubsc.com/">Sportsclub</a>
                        <a href="{{ route('login') }}">Player Login</a>
                        <!--<a href="{{ route('register') }}">Register</a>-->
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Sportsclub Racquetball Flex League
                    <h1>Welcome</h1>
                </div>

                <div>
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
              <a href =""><i class= "fas fa-chart-bar"></i></a>
            </div>
          </div>
          <div class="card border-success mb-3">
            <div class="card-header">Questions or Comments</div>
            <div class="card-body text-success">
              <h5 class="card-title">Please reach out to Lynette Froehlich</h5>
              <p class="card-text">Send her emails at Lynette.k.froehlich@gmail.com</p>
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
    </body>
</html>
