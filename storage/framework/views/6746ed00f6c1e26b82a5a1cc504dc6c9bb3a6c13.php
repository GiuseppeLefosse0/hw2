

<html>
  <head>

    <?php $__env->startSection('title', 'La tua scheda'); ?>
    <link rel="stylesheet" href='<?php echo e(URL::to("css/scheda.css")); ?>'>
    <script src='<?php echo e(URL::to("js/scheda.js")); ?>' defer></script>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  </head>

  <body>

    <?php $__env->startSection('content'); ?>
      <article>
        <?php $__env->startSection('titolo', 'SCHEDA'); ?>
        <span>Componi la tua scheda:</span>
        <section class="choice-grid">          
        </section>
      </article>
    <?php $__env->stopSection(); ?>

  </body>

</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/scheda.blade.php ENDPATH**/ ?>