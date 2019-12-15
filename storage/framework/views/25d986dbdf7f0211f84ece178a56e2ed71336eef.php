<?php $__env->startSection('styles'); ?>
      <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/common.css')); ?>">
<?php $__env->appendSection(); ?>

<?php if(Session::has('fail')): ?>
      <section class="info-box fail">
      	<?php echo e(Session::get('fail')); ?>

      </section>
<?php endif; ?>


<?php if(Session::has('success')): ?>
      <section class="info-box success">
      	<?php echo e(Session::get('success')); ?>

      </section>
<?php endif; ?>

<?php if(count($errors) > 0): ?>
      <section class="info-box fail">
       <ul>
      	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <li><?php echo e($error); ?></li>
      	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      	</ul>
      </section>
<?php endif; ?>