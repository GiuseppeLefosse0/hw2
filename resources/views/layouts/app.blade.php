<html>
  <head>
    <meta charset="utf-8">
    <title>RHINONATION - @yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    @section('header')
    <header>
      <nav>
        <div class="nav-logo">
          <img class="logo" src='{{ URL::to("immagini/logo.jpg")}}'>
          <span>RHINONATION</span>
        </div>
        <div id="links">
          <a href='http://localhost/hw2/public/index' id="home">Home</a>
          <a href='http://localhost/hw2/public/account'>Account</a> 
          <a href='http://localhost/hw2/public/scheda'>Scheda</a>
          <a href='http://localhost/hw2/public/ricerca_scheda'>Ricerca</a>
          <a href='http://localhost/hw2/public/playlists'>Playlists</a>
        </div>
        <div id="menu">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </nav>
      <h1>@yield('titolo')</h1>
      <div id="overlay"></div>
    </header>

@show

@yield('content')

@section('footer')
    <footer>
        <p>
            DEVELOPED BY GIUSEPPE LEFOSSE 1000019322
        </p>
    </footer>
@show

