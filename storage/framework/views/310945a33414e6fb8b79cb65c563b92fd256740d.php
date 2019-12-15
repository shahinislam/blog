<?php $__env->startSection('styles'); ?>
      <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/form.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
       <div class="container">
       	     <?php echo $__env->make('includes.info-box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       	     <form action="<?php echo e(route('admin.blog.post.update')); ?>" method="post">
       	     	<div class="input-group">
       	     		<label for="title">Title</label>
       	     		<input type="text" name="title" id="title" <?php echo e($errors->has('title') ? 'class=has-error' : ''); ?> value="<?php echo e(Request::old('title') ? Request::old('title') : isset($post) ? $post->title : ''); ?>">
       	     	</div>
       	     	<div class="input-group">
       	     		<label for="author">Author</label>
       	     		<input type="text" name="author" id="author" <?php echo e($errors->has('author') ? 'class=has-error' : ''); ?> value="<?php echo e(Request::old('author') ? Request::old('author') : isset($post) ? $post->author : ''); ?>">
       	     	</div>
       	     	<div class="input-group">
       	     		<label for="category_select">Add Categories</label>
             	     		<select name="category_select" id="category_select">

             	     		    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             	     			
             	     		</select>
       	     		<button type="button" class="btn">Add Category</button>
       	     		<div class="added-categories">
                <ul>
                    <?php $__currentLoopData = $post_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="#" data-id="<?php echo e($post_category->id); ?>"><?php echo e($post_category->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
       	     		</div>
       	     		<input type="hidden" name="categories" id="categories" value="<?php echo e(implode(',', $post_categories_ids)); ?>">
      	     	</div>
      	     	<div class="input-group">
       	     		<label for="body">Body</label>
       	     		<textarea name="body" id="body" rows="12" <?php echo e($errors->has('body') ? 'class=has-error' : ''); ?> > <?php echo e(Request::old('body') ? Request::old('body') : isset($post) ? $post->body : ''); ?></textarea>
       	     	</div>
       	     	<button type="submit" class="btn">Save Post</button>
       	     	<input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
                  <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>">
       	     </form>
       </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
        <script type="text/javascript" src="<?php echo e(URL::to('js/posts.js')); ?>"></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin-master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>