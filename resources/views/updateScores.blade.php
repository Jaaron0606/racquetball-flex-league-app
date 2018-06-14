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
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                Update Match Score
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
