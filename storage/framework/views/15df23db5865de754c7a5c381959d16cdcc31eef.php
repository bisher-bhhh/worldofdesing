<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($work->title); ?></h1>
    <p><?php echo e($work->description); ?></p>
    <h2>Images</h2>
    <div class="row">
        <?php $__currentLoopData = $work->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <img src="<?php echo e(asset($image->file_path)); ?>" class="img-fluid" alt="<?php echo e($image->file_name); ?>">
                <div>
                    <a href="<?php echo e(route('admin.work.image.edit', ['work_id' => $work->id, 'image_id' => $image->id])); ?>" class="btn btn-primary">Edit</a>
                    <form action="<?php echo e(route('admin.work.image.delete', ['work_id' => $work->id, 'image_id' => $image->id])); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\testbasel\pr\resources\views/backend/show.blade.php ENDPATH**/ ?>