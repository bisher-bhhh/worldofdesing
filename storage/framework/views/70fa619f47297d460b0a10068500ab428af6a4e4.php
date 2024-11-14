<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1><?php echo e($work->title); ?></h1>
        <p><?php echo e($work->description); ?></p>
        <h2>Images</h2>
        <div class="row mb-3">
            <button class="btn btn-success" data-toggle="modal" data-target="#uploadImageModal">Add Image</button>
        </div>
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

    <!-- Upload Image Modal -->
    <div class="modal fade" id="uploadImageModal" tabindex="-1" role="dialog" aria-labelledby="uploadImageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo e(route('admin.work.image.store', $work->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-header">
                        <h5 class="modal-title" id="uploadImageModalLabel">Upload New Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" name="image" id="image" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testbasel\testbasel\pr\resources\views/backend/show.blade.php ENDPATH**/ ?>