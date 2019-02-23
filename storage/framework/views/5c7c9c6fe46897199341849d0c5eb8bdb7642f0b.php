<?php $__env->startSection('content'); ?>

    <section>
        <content>
            
        </content>
        страница 2
        
        <div>
        
        <?php $__currentLoopData = $food_at_diseases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

            <?php if($item): ?> 

                <?php echo e($item->title); ?> <br>

            <?php endif; ?>
                    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>