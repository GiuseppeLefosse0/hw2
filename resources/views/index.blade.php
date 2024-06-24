@extends('layouts.app')

<html>

  <head>
    @section('title', 'Homepage')
    <script src='{{ URL::to("js/index.js") }}' defer></script>
    <link rel="stylesheet" href='{{ URL::to("css/index.css") }}'>
  </head>

  <body>

    @section('content')
      <article>

        @section('titolo', 'HOMEPAGE')

          <section>
            <div class="piani">
              <span>I nostri piani:</span>
              <span class='hidden' id='piano_sel'></span>
            </div>
          </section>

      </article>
    @endsection
   
  </body>

</html>