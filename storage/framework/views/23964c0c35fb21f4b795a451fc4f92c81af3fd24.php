<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
     <div class="container">
     	<section id="post-admin">
     		<a href="<?php echo e(route('admin.blog.post.edit',['post_id'=>$post->id])); ?>">Edit Post</a>
     		<a href="<?php echo e(route('admin.blog.post.delete',['post_id'=>$post->id])); ?>">Delete Post</a>
     	</section>
     	<section class="post">
     		<h1><?php echo e($post->title); ?></h1>
     		<span class="info"><?php echo e($post->author); ?> | <?php echo e($post->created_at); ?></span>
     		<p><?php echo e($post->body); ?></p>
     	</section>
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>