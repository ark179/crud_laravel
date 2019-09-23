<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="text-right">
        <a href="<?php echo e(action('TicketController@create')); ?>" class="btn btn-primary">Add Ticket</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
              <td>ID</td>
              <td>Title</td>
              <td>Description</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($ticket->id); ?></td>
                <td><?php echo e($ticket->title); ?></td>
                <td><?php echo e($ticket->description); ?></td>
                <td><a href="<?php echo e(action('TicketController@edit',$ticket->id)); ?>" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="<?php echo e(action('TicketController@destroy', $ticket->id)); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_laravel\resources\views/ticket/index.blade.php ENDPATH**/ ?>