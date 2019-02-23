<nav class="navbar navbar-expand-md navbar-light navbar-laravel">

    <?php if(Route::has('login')): ?>
        <div class="top-right links">
            <?php if(auth()->guard()->check()): ?>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Войти</a>

                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>">Регистрация</a>
                <?php endif; ?>
            <?php endif; ?>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <?php if(auth()->guard()->guest()): ?>

                        <?php if(Route::has('register')): ?>

                        <?php endif; ?>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Выйти')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</nav>





<?php $__env->startSection('content'); ?>

    
        
            
                
                    
                        
                        
                    
                    
                    
                    
                    
                    
                
        
    

    <section>
        <content>
            <p>страница 2</p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur culpa cumque quos reprehenderit voluptatum. Commodi delectus eos, et ipsa magnam, nulla perferendis quasi quibusdam quos reiciendis similique temporibus vero, voluptatibus. At consectetur doloremque, dolorum enim fugiat id pariatur quasi quidem repellat, saepe tempora, voluptatibus. Blanditiis deserunt ducimus nam officiis voluptates?
        </content>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>