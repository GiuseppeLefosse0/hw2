

<html>
  <head>    

    <?php $__env->startSection('title', 'Il tuo account'); ?>
    <link rel="stylesheet" href='<?php echo e(URL::to("css/account.css")); ?>'>

  </head>
  <body>   

    <?php $__env->startSection('content'); ?>
      <article>

        <?php $__env->startSection('titolo', 'ACCOUNT'); ?>
        <section>
          <div class="account">
            Il tuo account
            <p>Username: <?php echo e($user['username']); ?></p> 
            <p>Nome: <?php echo e($user['nome']); ?></p>
            <p>Cognome: <?php echo e($user['cognome']); ?></p>
            <p>Email: <?php echo e($user['email']); ?></p>
            <p>Piano: <?php echo e($user['piano']); ?></p>
          </div>
        </section>
        <a id='logout' href="<?php echo e(URL::to('logout')); ?>">Effettua il logout!</a>

      </article>
    <?php $__env->stopSection(); ?>

  </body>  

</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/account.blade.php ENDPATH**/ ?>