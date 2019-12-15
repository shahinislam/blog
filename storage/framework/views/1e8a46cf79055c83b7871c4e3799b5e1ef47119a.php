<?php $__env->startSection('styles'); ?>
      <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/form.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
       <div class="container">
       	    <?php echo $__env->make('includes.info-box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

       	    <form action="<?php echo e(route('admin.login')); ?>" method="post">
       	    	<div class="input-group"> 
                     <label for="email">E-mail</label>
                     <input type="text" name="email" id="email" <?php echo e($errors->has('email') ? 'class=has-error' : ''); ?> value="<?php echo e(Request::old('email')); ?>" />
       	    	</div>
       	    	<div class="input-group"> 
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password" <?php echo e($errors->has('password') ? 'class=has-error' : ''); ?> />
       	    	</div>
       	    	<button type="submit" class="btn">Login</button>
       	    	<input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
       	    </form>
       </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>