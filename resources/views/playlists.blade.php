@extends('layouts.app')

<html>
  <head>

    @section('title', 'playlists')
    <link rel="stylesheet" href='{{ URL::to("css/playlists.css") }}'>
    <script src='{{ URL::to("js/playlists.js") }}' defer></script>

  </head>

  <body>

    @section('content')
      <article>
        @section('titolo', 'PLAYLISTS')
        <a href="#" class="leggi-di-più">Leggi di più</a>
            <p id="p1" class="hidden-p1">
            Esplora le Playlist Spotify preferite dal team RHINONATION che ti potranno aiutare
            nelle tue sessioni di allenamento intense. Corri su Spotify e ascoltale!
            </p>
        <section id="playlist_view"></section>
      </article>
    @endsection

  </body>

</html>