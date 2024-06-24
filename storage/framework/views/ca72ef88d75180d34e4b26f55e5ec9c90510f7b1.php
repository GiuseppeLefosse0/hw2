<html>
    <head>
        <title>RHINONATION - Accedi!</title>
        <meta charset='utf-8'>
        <link rel='stylesheet' href='<?php echo e(URL::to("css/login.css")); ?>'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <script src='<?php echo e(URL::to("js/login.js")); ?>' defer></script>
        
    </head>
    <body>
        <article>
            <section id='logo'>
                <img src='<?php echo e(URL::to("immagini/logo.jpg")); ?>'>
                <h1>Benvenuto in RHINONATION!</h1>
            </section>
            <p>Effettua l'accesso!</p>

            <span class='hidden' id='errore_login'>Inserisci username e password!</span>
            <span class='hidden' id='cred_sbagliate'>Username e/o password errati!</span>

            <section id='login-form'>
                <form name='login' method='post' id='form_login'>
                    <?php echo csrf_field(); ?>

                    <label>Username:<input type='text' name='username' id='nome_utente'></label>
                    <label>Password:<input type='password' name='password' id='password'></label>
                    <label><input type='submit' value='Accedi' id='button'></label>
                </form>
            </section>

            <p class='footer_sign'>Non hai ancora un account? <a id='link' href="<?php echo e(URL::to('/registrazione')); ?>">Registrati qui!</a>

        </article>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\hw2\resources\views/login.blade.php ENDPATH**/ ?>