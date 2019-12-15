<?php $__env->startSection('styles'); ?>
      <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/modal.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
<?php echo $__env->make('includes.info-box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
  <section id="post-admin">
       <a href="<?php echo e(route('admin.blog.create_post')); ?>" class="btn">New Post</a>
  </section>
  <section class="list">
     
         <?php if(count($posts) == 0): ?>
             <li>No Posts</li>
             <?php else: ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                    <article>
                          <div class="post-info">
                                <h3><?php echo e($post->title); ?></h3>
                                <span class="info"><?php echo e($post->author); ?> | <?php echo e($post->created_at); ?></span>
                          </div>
                          <div class="edit">
                                <nav>
                                      <ul>
                                            <li><a href="<?php echo e(route('admin.blog.post',['post_id'=>$post->id,'end'=>'admin'])); ?>">View Post</a></li>
                                            <li><a href="<?php echo e(route('admin.blog.post.edit',['post_id'=>$post->id])); ?>">Edit</a></li>
                                            <li><a href="<?php echo e(route('admin.blog.post.delete',['post_id'=>$post->id])); ?>" class="danger">Delete</a></li>
                                      </ul>
                                </nav>
                          </div>
                    </article>
               
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

  </section>
  <?php if($posts->lastPage() >1): ?>
       <section class="pagination">
                <?php if($posts->currentPage() !== 1): ?>
                    <a href="<?php echo e($posts->previousPageUrl()); ?>"><i class="fa fa-caret-left"></i></a>
                <?php endif; ?>

                <?php if($posts->currentPage() !== $posts->lastPage()): ?>
                    <a href="<?php echo e($posts->nextPageUrl()); ?>"><i class="fa fa-caret-right"></i></a>
                <?php endif; ?>
       </section>
       <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>