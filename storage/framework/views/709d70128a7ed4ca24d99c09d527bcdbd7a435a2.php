

<html>
  <head>

    <?php $__env->startSection('title', 'Ricerca Scheda'); ?>
    <link rel="stylesheet" href='<?php echo e(URL::to("css/ricerca_scheda.css")); ?>'>
    <script src='<?php echo e(URL::to("js/ricerca_scheda.js")); ?>' defer></script>

  </head>
  <body>

    <?php $__env->startSection('content'); ?>
      <article>

        <?php $__env->startSection('titolo', 'RICERCA'); ?>

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
    <?php $__env->stopSection(); ?>

  </body>

</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/ricerca_scheda.blade.php ENDPATH**/ ?>