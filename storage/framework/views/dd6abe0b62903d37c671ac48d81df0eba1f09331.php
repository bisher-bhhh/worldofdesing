<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('General Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <?php echo $__env->make('backend/partials/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-12 mt-t">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('General Settings')); ?></h4>
                        <form action="<?php echo e(route('admin.footer.general')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="img-wrapper" style="margin: 20px">
                                <?php if(file_exists('assets/uploads/'.get_static_option('footer_background_image'))): ?>
                                    <img style="max-width: 200px" src="<?php echo e(asset('assets/uploads/'.get_static_option('footer_background_image'))); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="footer_background_image"><?php echo e(__('Background Image')); ?></label>
                                <input type="file" class="form-control"  id="footer_background_image"  name="footer_background_image" >
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Settings')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testbasel\testbasel\pr\resources\views/backend/pages/footer/general.blade.php ENDPATH**/ ?>