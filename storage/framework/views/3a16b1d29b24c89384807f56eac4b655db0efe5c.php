<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Edit Image</h1>
    <form action="<?php echo e(route('admin.work.image.update', ['work_id' => $image->project_id, 'image_id' => $image->id])); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Update Image</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\testbasel\pr\resources\views/backend/edit_image.blade.php ENDPATH**/ ?>