

<html>

  <head>
    <?php $__env->startSection('title', 'Homepage'); ?>
    <script src='<?php echo e(URL::to("js/index.js")); ?>' defer></script>
    <link rel="stylesheet" href='<?php echo e(URL::to("css/index.css")); ?>'>
  </head>

  <body>

    <?php $__env->startSection('content'); ?>
      <article>

        <?php $__env->startSection('titolo', 'HOMEPAGE'); ?>

          <section>
            <div class="piani">
              <em>I nostri piani:</em>
              <span class='hidden' id='piano_sel'></span>
            </div>
          </section>

      </article>
    <?php $__env->stopSection(); ?>
   
  </body>

</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/index.blade.php ENDPATH**/ ?>