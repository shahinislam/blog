<?php $__env->startSection('title'); ?>
        Contact
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
       <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/form.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <?php echo $__env->make('includes.info-box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <form action="<?php echo e(route('contact.send')); ?>" method="post" id="contact-form">
        	<div class="input-group">
        		<label for="name">Your name</label>
        		<input type="text" name="name" id="name" value="<?php echo e(Request::old('name')); ?>" />
        	</div>
            <div class="input-group">
                <label for="email">Your E-mail</label>
                <input type="text" name="email" id="email"  value="<?php echo e(Request::old('email')); ?>" />
            </div>
        	<div class="input-group">
        		<label for="subject">Subject</label>
        		<input type="text" name="subject" id="subject"  value="<?php echo e(Request::old('subject')); ?>" />
        	</div>
        	<div class="input-group">
        		<label for="message">Your Message</label>
        		<textarea name="message" id="message" rows="10"><?php echo e(Request::old('message')); ?></textarea>
        	</div>
        	<button type="submit" class="btn">Submit Message</button>
        	<input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>" />
        </form>
<?php $__env->stopSection(); ?>  
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>