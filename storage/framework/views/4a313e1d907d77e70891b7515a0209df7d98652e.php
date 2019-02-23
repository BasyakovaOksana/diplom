<style>

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

</style>

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

    <section class="sectionContent">
        <p class="manHeader">
            Человек состоит из того, что он ест
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Illo nihil beatae hic iusto eligendi soluta necessitatibus
            nesciunt ea voluptate voluptatibus perferendis tempora accusantium
            nostrum pariatur odit praesentium repudiandae, dignissimos nobis
            veritatis sequi nam omnis. Aliquam, atque? Sequi nisi delectus
            eum eveniet illum laudantium quis, dolorum fugiat, itaque voluptas
            fugit inventore officia quisquam nulla neque corporis consequuntur
            accusantium, nobis magnam est ipsa a voluptates necessitatibus.
            Delectus molestiae eveniet nobis voluptatibus officia exercitationem
            debitis officiis dolorum ea deserunt, fuga aperiam, neque? Illo
            facilis laudantium tempora commodi aliquam hic quo, explicabo
            voluptate, accusamus dolorum necessitatibus repellendus ipsam minus
            autem dicta neque aliquid cupiditate.
        </p>
    </section>

    <section>
        <content class="manContent">
            <img src="images/fat_man.png" alt="fat_man" class="man">
            <img src="images/slender_man.png" alt="slender_man" class="man">
        </content>
    </section>

    
        
            
                

                
                    
                        
                            
                        
                    

                    
                
            
        
    


<?php $__env->stopSection(); ?>





<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>