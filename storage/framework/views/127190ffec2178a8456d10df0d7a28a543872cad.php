<div class="ajax-container">
	<div class="row align-items-center py-4">

		<div class="col">
			<a href="#" data-ajax-portfolio-prev class="text-decoration-none d-block float-start">
				<div class="d-flex align-items-center line-height-1">
					<i class="fas fa-arrow-left text-dark text-4 me-3"></i>
					<div class="d-none d-sm-block line-height-1">
						<span class="text-dark opacity-4 text-1">PREVIOUS PROJECT</span>
						<h4 class="font-weight-bold text-3 mb-0">Presentation</h4>
					</div>
				</div>
			</a>
		</div>
		<div class="col">
			<div class="row">
				<div class="col-md-12 align-self-center p-static order-2 text-center">
					<div class="overflow-hidden pb-2">
						<h2 class="text-dark font-weight-bold text-7 mb-0"><?php echo e($data->title); ?></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<a href="#" data-ajax-portfolio-next class="text-decoration-none d-block float-end">
				<div class="d-flex align-items-center text-end line-height-1">
					<div class="d-none d-sm-block line-height-1">
						<span class="text-dark opacity-4 text-1">NEXT PROJECT</span>
						<h4 class="font-weight-bold text-3 mb-0">Identity</h4>
					</div>
					<i class="fas fa-arrow-right text-dark text-4 ms-3"></i>
				</div>
			</a>
		</div>

	</div>

	<div class="row pb-4 mb-2">
		<div class="col-sm-6">

			<div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
				<img src="<?php echo e(asset('assets/uploads/works/work-large-' . $data->id . '.' . $data->image)); ?>" class="img-fluid border-radius-0" alt="">
			</div>

			<hr class="solid my-5">

			<strong class="text-uppercase text-1 me-3 text-dark float-start position-relative top-2">Share</strong>
			<ul class="social-icons">
				<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
				<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
				<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
			</ul>

		</div>
		<div class="col-sm-6">
			<h2 class="text-color-dark font-weight-normal text-4 mb-0">Project <strong class="font-weight-extra-bold">Description</strong></h2>
			<?php echo $data->description; ?>



			<h2 class="text-color-dark font-weight-normal text-4 mb-0 mt-4">Project <strong class="font-weight-extra-bold">Details</strong></h2>
			<ul class="list list-icons list-primary list-borders text-2">
				<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Client:</strong> <?php echo e($data->clients); ?></li>
				<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> <?php echo e($data->start_date); ?></li>
				<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Category:</strong> <a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1"><?php echo e(get_work_category_by_id($data->id, 'slug')); ?></a></li>
				
			</ul>
		</div>
	</div>
</div><?php /**PATH C:\wamp\www\testbasel\pr\resources\views/frontend/portfolio-ajax-project.blade.php ENDPATH**/ ?>