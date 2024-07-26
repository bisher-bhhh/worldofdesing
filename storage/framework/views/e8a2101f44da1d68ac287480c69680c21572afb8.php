






































































<div id="custom-content" class="white-popup-block bg-dark white-popup-block-lg">
	<div class="row">
		<div class="col">
			<h3 class="font-weight-bold text-color-light text-7 text-capitalize ls-0 my-3"><?php echo e($service_item->title); ?></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut nunc in enim laoreet ornare. Nullam tincidunt tempor ligula eu dignissim. Nam semper dui quis congue mollis. Nam at tellus ultricies, tincidunt quam non, rhoncus mauris. Nullam gravida molestie lorem, et euismod metus feugiat ac.</p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-4 text-center">
			<div class="featured-boxes featured-boxes-style-4 custom-featured-boxes-style-1">
				<div class="row">
					<div class="col">
						<div class="featured-box">
							<div class="box-content p-0 border-0">
								<?php if($service_item->id==25): ?>
									<img height="87px" src="<?php echo e(asset('assets/frontend/img/building.png')); ?>">
								<?php endif; ?>
								<?php if($service_item->id==26): ?>
									<img height="87px" src="<?php echo e(asset('assets/frontend/img/sketch.png')); ?>">
								<?php endif; ?>
								<?php if($service_item->id==27): ?>
									<img height="87px" src="<?php echo e(asset('assets/frontend/img/save-forest.png')); ?>">
								<?php endif; ?>
								<?php if($service_item->id==28): ?>
									<img height="87px" src="<?php echo e(asset('assets/frontend/img/staircase.png')); ?>">
								<?php endif; ?>							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="col-lg-8">
			<p>ServiceID: <?php echo e($service_item->id); ?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut nunc in enim laoreet ornare. Nullam tincidunt tempor ligula eu dignissim. Nam semper dui quis congue mollis.</p>

			<p class="mb-0"><span class="text-color-light text-4 mb-3">CALL US NOW</span></p>
			<p class="mb-3"><a href="tel:+1234567890" class="text-decoration-none text-color-primary font-weight-bold line-height-2 text-6 opacity-10">1-800-123-4567</a></p>
		</div>
	</div>
</div>
<?php /**PATH C:\wamp\www\testbasel\pr\resources\views/frontend/portfolio-ajax-details.blade.php ENDPATH**/ ?>