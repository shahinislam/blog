<?php $__env->startSection('title'); ?>
     <?php echo e($post->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
     <article>
     	<h3><?php echo e($post->title); ?></h3>
     	<span class="subtitle"><?php echo e($post->author); ?> | <?php echo e($post->create_at); ?></span>
     	<p><?php echo e($post->body); ?></p>
     </article>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>