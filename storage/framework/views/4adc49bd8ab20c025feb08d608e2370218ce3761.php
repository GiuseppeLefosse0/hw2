

<html>
  <head>

    <?php $__env->startSection('title', 'playlists'); ?>
    <link rel="stylesheet" href='<?php echo e(URL::to("css/playlists.css")); ?>'>
    <script src='<?php echo e(URL::to("js/playlists.js")); ?>' defer></script>

  </head>

  <body>

    <?php $__env->startSection('content'); ?>
      <article>
        <?php $__env->startSection('titolo', 'PLAYLISTS'); ?>
        <a href="#" class="leggi-di-più">Leggi di più</a>
            <p id="p1" class="hidden-p1">
            Esplora le Playlist Spotify preferite dal team RHINONATION che ti potranno aiutare
            nelle tue sessioni di allenamento intense. Corri su Spotify e ascoltale!
            </p>
        <section id="playlist_view"></section>
      </article>
    <?php $__env->stopSection(); ?>

  </body>

</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/playlists.blade.php ENDPATH**/ ?>