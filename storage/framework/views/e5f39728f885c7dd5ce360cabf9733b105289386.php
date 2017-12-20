<style type="text/css">
	.profile-img{
		max-width: 150px;
		border: 5px solid #fff;
		border-radius: 100%;
		box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
	}
</style>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		 <div class="panel panel-default">
		 	<div class="panel-body text-center">
		 		<img class="profile-img" src="http://www.newsshare.in/wp-content/uploads/2017/04/Miniclip-8-Ball-Pool-Avatar-14.png">

		 		<h1><?php echo e($user->name); ?></h1>
		 		<h5><?php echo e($user->email); ?></h5>
		 		<h5><?php echo e($user->dob->format('l j F Y')); ?> (<?php echo e($user->dob->age); ?> years old)</h5>

		 		<button class="btn btn-success">Follow</button>
		 	</div>
		 </div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>