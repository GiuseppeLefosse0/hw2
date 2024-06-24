@extends('layouts.app')

<html>
  <head>

    @section('title', 'Ricerca Scheda')
    <link rel="stylesheet" href='{{ URL::to("css/ricerca_scheda.css") }}'>
    <script src='{{ URL::to("js/ricerca_scheda.js") }}' defer></script>

  </head>
  <body>

    @section('content')
      <article>

        @section('titolo', 'RICERCA')

        <span>Ricerca una scheda inserendo il nome utente: </span>
        <form name='ricerca_scheda' action='scheda.php' method='get' id='ricerca_scheda'>
          <span id='descrizione'>Inserisci username:</span>
          <input id='barra' type="text" name='ricerca'>
          <input id='button' type="submit" value="Cerca">
        </form>
        <section class="grid">   
        </section>
        <div class='errore'></div>
      </article>
    @endsection

  </body>

</html>