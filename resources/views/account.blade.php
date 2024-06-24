@extends('layouts.app')

<html>
  <head>    

    @section('title', 'Il tuo account')
    <link rel="stylesheet" href='{{ URL::to("css/account.css")}}'>

  </head>
  <body>   

    @section('content')
      <article>

        @section('titolo', 'ACCOUNT')
        <section>
          <div class="account">
            Il tuo account
            <p>Username: {{$user['username']}}</p> 
            <p>Nome: {{$user['nome']}}</p>
            <p>Cognome: {{$user['cognome']}}</p>
            <p>Email: {{$user['email']}}</p>
            <p>Piano: {{$user['piano']}}</p>
          </div>
        </section>
        <a id='logout' href="{{ URL::to('logout')}}">Effettua il logout!</a>

      </article>
    @endsection

  </body>  

</html>