<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--<title>Index Page</title>-->
    <!--<link rel="stylesheet" href="{{asset('css/app.css')}}">-->
    
    
    <!-- Bootstrap Stuff -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    
  </head>
  <body>
    <div class="container">
    <br />
    <!--@if (\Session::has('success'))-->
    <!--  <div class="alert alert-success">-->
    <!--    <p>{{ \Session::get('success') }}</p>-->
    <!--  </div><br />-->
    <!-- @endif-->
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Opponent</th>
        <!--<th>Date Updated</th>-->
        <th>Match Total</th>
        <th>Points Allowed</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($matches as $match)
      <!--@php-->
      <!--  $date=date('Y-m-d', $passport['date']);-->
      <!--  @endphp-->
      <tr>
        <td>{{$match['id']}}</td>
        <td>{{$match['opponentName']}}</td>
        <td>{{$match['playerTotal']}}</td>
        <td>{{$match['opponentTotal']}}</td>
        
        <td><a href="{{action('MatchController@edit', $match['id'])}}" class="btn btn-info">Edit</a></td>
        <!--<td>-->
          <!--<form action="{{--action('PassportController@destroy', $passport['id'])--}}" method="post">-->
          <!--  @csrf-->
          <!--  <input name="_method" type="hidden" value="DELETE">-->
          <!--  <button class="btn btn-danger" type="submit">Delete</button>-->
          <!--</form>-->
        <!--</td>-->
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>