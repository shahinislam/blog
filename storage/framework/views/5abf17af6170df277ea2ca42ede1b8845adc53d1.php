<?php $__env->startSection('styles'); ?>
       <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/categories.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
     <div class="container">
          <section id="category-admin">
               <form action="" method="POST">
                  <div class="input-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" id="name" />
                    <button type="submit" class="btn">Create Category</button>
                  </div>
               </form>
          </section>

          <section class="list">
               <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article>
                         <div class="category-info" data-id="<?php echo e($category->id); ?>">
                              <h3><?php echo e($category->name); ?></h3>
                         </div>
                         <div class="edit">
                              <nav>
                                  <ul>
                                       <li class="category-edit"><input type="text" /></a></li>
                                       <li><a href="#">Edit</a></li>
                                       <li><a href="#" class="danger">Delete</a></li>
                                  </ul> 
                              </nav>
                         </div>
                    </article>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </section>
          <?php if($categories->lastPage() >1): ?>
            <section class="pagination">
                <?php if($categories->currentPage() !== 1): ?>
                         <a href="<?php echo e($categories->previousPageUrl()); ?>"><i class="fa fa-caret-left"></i></a>
                     <?php endif; ?>

                <?php if($categories->currentPage() !== $categories->lastPage()): ?>
                         <a href="<?php echo e($categories->nextPageUrl()); ?>"><i class="fa fa-caret-right"></i></a>
                     <?php endif; ?>
            </section>
          <?php endif; ?>
     </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
      <script type="text/javascript">
           var token="<?php echo e(Session::token()); ?>";  
      </script>
      <script type="text/javascript" src="<?php echo e(URL::to('js/categories.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>