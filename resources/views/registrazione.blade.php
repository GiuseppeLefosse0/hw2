

<html>
    <head>
        <title>RHINONATION - Iscriviti!</title>
        <meta charset='utf-8'>
        <link rel='stylesheet' href='{{ URL::to("css/registrazione.css") }}'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <script src='{{ URL::to("js/registrazione.js") }}' defer></script>
        
    </head>
    <body>
        <article>
            <section id='logo'>
                <img src='{{ URL::to("immagini/logo.jpg")}}'>
                <h1>Benvenuto in RHINONATION!</h1>
            </section>
            <p>Completa il modulo qui sotto per iscriverti!</p>
         
            <span class='hidden' id='errore1'>La password deve contenere tra i 5 e i 15 caratteri!</span>
            <span class='hidden' id='errore2'>Bisogna compilare tutti i campi!</span>
            <span class='hidden' id='errore3'>Username già in uso!</span>
            <span class='hidden' id='errore4'>Email già in uso!</span>
            <span class='hidden' id='errore5'>Ops qualcosa è andato storto, riprova più tardi!</span>
            <span class='hidden' id='errore6'>Username non valido!</span>
            <span class='hidden' id='errore7'>Formato email non valido!</span>
            <span class='hidden' id='errore8'>Inserisci un nome valido!</span>
            <span class='hidden' id='errore9'>Inserisci un cognome valido!</span>

            <section id='subscribe-form'>
                <form name='signup' method='post'id='form_subscribe'>
                    @csrf
                    
                    <label>Username:<input type='text' name='username' id='nome_u' value= '{{$old_username}}'></label>
                    <label>Password:<input type='password' name='password' id='pw'></label>
                    <label>Email:<input type='text' name='email' id='email' value= '{{$old_email}}'></label>
                    <label>Nome:<input type='text' name='nome' id='nome' value= '{{$old_nome}}'></label>
                    <label>Cognome:<input type='text' name='cognome' id='cognome'value= '{{$old_cognome}}'></label>

                    <label><input type='submit' value='Registrati'></label>

                </form>
            </section>

            <p class='footer'>Sei già iscritto? <a id='link' href="{{ URL::to('login') }}">Accedi qui!</a></p>
          

        </article>
    </body>
</html>
