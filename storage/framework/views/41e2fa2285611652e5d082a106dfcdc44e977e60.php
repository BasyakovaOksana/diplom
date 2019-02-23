<?php $__env->startSection('content'); ?>

    <section>
        <content>
            <p><?php echo e($nutrients->title); ?></p>
            <p><?php echo e($nutrients->content); ?></p>
        </content>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>