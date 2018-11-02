@extends('layouts.app')

@push('styles')
  <link href="{{ asset('css/welcomestyle.css') }}" rel="stylesheet">
@endpush

@section('content')
  <div class="flex-center position-ref">
    <!--@if (Route::has('login'))-->
    <!--  <div class="top-right links">-->
    <!--    @auth-->
    <!--      <a href="{{ url('/scoreboard') }}">Scoreboard</a>-->
    <!--      <a href="{{ url('/matches') }}">Matches</a>-->
    <!--    @else-->
    <!--      <a href="https://www.sportsclubsc.com/">Sportsclub</a>-->
    <!--      <a href="{{ route('login') }}">Player Login</a>-->
          <!--<a href="{{ route('register') }}">Register</a>-->
    <!--    @endauth-->
    <!--  </div>-->
    <!--@endif-->
      
    <div class="content">
      @if (\Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ \Session::get('error') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      
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
              <a href =""><i class= "fas fa-chart-bar"></i></a>
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
        </div>
      </div>
    </div>
  </div>
@endsection