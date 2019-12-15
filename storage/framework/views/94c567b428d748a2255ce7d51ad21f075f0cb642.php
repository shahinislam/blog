
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
	<title>Admin area</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/admin.css')); ?>">
	<?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <?php echo $__env->make('includes.admin-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    
    <script type="text/javascript">
    	var baseUrl="<?php echo e(URL::to('/')); ?>";
    </script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>