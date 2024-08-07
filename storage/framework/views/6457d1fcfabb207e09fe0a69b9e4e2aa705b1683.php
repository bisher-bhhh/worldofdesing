




















<?php $__currentLoopData = $all_work; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $img_url = ''; ?>
    <?php if(file_exists('assets/uploads/works/work-grid-'.$data->id.'.'.$data->image)): ?>
        <?php $img_url = asset('assets/uploads/works/work-large-'.$data->id.'.'.$data->image); ?>
    <?php endif; ?>
    <div class="col-lg-4 isotope-item <?php echo e(get_work_category_by_id($data->id, 'slug')); ?>" style="padding: 10px; float: left;">
        <div class="portfolio-item">
            <a href="<?php echo e(route('frontend.singleproject', ['id' => $data->id])); ?>" class="text-decoration-none">
                <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-dark-linear custom-thumb-info-style-1">
                    <span class="thumb-info-wrapper">
                        <img src="<?php echo e($img_url); ?>" class="img-fluid" alt="">
                        <span class="thumb-info-title text-start">
                            <span class="thumb-info-inner font-weight-bold line-height-1 text-4 mb-3"><?php echo e($data->title); ?></span>
                            <span class="thumb-info-type text-transform-none font-weight-light text-1 line-height-7 pe-xl-5 me-5"><?php echo e(get_work_category_by_id($data->id, 'slug')); ?></span>
                        </span>
                    </span>
                </span>
            </a>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\testbasel\testbasel\pr\resources\views/frontend/partials/project_list.blade.php ENDPATH**/ ?>