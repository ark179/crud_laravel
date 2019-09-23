<?php $__env->startSection('content'); ?>
<div class="container">
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div><br />
<?php endif; ?>
    <div class="row">
    <form method="post" action="<?php echo e(action('TicketController@update', $id)); ?>" >
        <?php echo e(csrf_field()); ?>

        <input name="_method" type="hidden" value="PATCH">
        <div class="form-group">
            <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token" />
            <label for="title">Ticket Title:</label>
            <input type="text" class="form-control" name="title" value=<?php echo e($ticket->title); ?> />
        </div>
        <div class="form-group">
            <label for="description">Ticket Description:</label>
            <textarea cols="5" rows="5" class="form-control" name="description"><?php echo e($ticket->description); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_laravel\resources\views/ticket/edit.blade.php ENDPATH**/ ?>