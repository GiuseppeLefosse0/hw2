@extends('layouts.app')

<html>
  <head>

    @section('title', 'La tua scheda')
    <link rel="stylesheet" href='{{ URL::to("css/scheda.css") }}'>
    <script src='{{ URL::to("js/scheda.js") }}' defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>

  <body>

    @section('content')
      <article>
        @section('titolo', 'SCHEDA')
        <span>Componi la tua scheda:</span>
        <section class="choice-grid">          
        </section>
      </article>
    @endsection

  </body>

</html>