<header>
    <h1>
        название сайта
    </h1>
    <form action="{{ route('search') }}" method="post">
            {{ csrf_field() }}
        <input type="search" name="search" placeholder="поиск" class="search">
        <label for="search"></label>
    </form>
    <nav>

        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    @else
                        <a href="{{ route('login') }}">Войти</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Регистрация</a>
                            @endif
                @endauth

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest

                        @if (Route::has('register'))

                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Выйти') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    @endif

        <ul class="navigation">
            <li><a href="{{ route('index.main_page') }}">ГЛАВНАЯ</a></li>
            <li>ПИТАНИЕ ПРИ ЗАБОЛЕВАНИЯХ
                <ul class="list">
                     
                        @foreach($food_at_diseases as $item)
                        <li><a href="{{ route('index.food_at_diseases', $item->slug) }}">{{ $item->title }}</a></li> 
                        @endforeach
                </ul>
            </li>
            <li>ПИТАТЕЛЬНЫЕ ВЕЩЕСТВА
                <ul class="list">
                    <li><a href="{{ route('index.nutrients') }}">БЕЛКИ</a></li>
                    <li><a href="">ЖИРЫ</a></li>
                    <li><a href="">УГЛЕВОДЫ</a></li>
                    <li><a href="">ВИТАМИНЫ</a></li>
                    <li><a href="">МИНЕРАЛЫ</a></li>
                    <li><a href="">КЛЕТЧАТКА</a></li>
                    <li><a href="">ВОДА</a></li>
                </ul>
            </li>
            <li><a href="{{ route('index.contacts') }}">КОНТАКТЫ</a></li>
        </ul>
    </nav>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../images/vegetables.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/food.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/food1.jpg">
            </div>
        </div>
    </div>

    <!-- <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="animation: push">
        <ul class="uk-slideshow-items">
            <li>
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="images/vegetables.jpg" alt="" uk-cover>
                    <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('images/green_vegetables.jpg');">
                        <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
                            <a href="index.php"><h2 uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;" style="color: #000;">ГЛАВНАЯ</h2></a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-right">
                    <img src="images/food1.jpg" alt="" uk-cover>
                    <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex
                            uk-flex-top" style="background-image: url('images/green_vegetables.jpg');">
                        <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
                            <a href="page2.php"><h2 uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;" style="color: #000;">ПИТАНИЕ ПРИ ЗАБОЛЕВАНИЯХ</h2></a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-left">
                    <img src="images/food.jpg" alt="" uk-cover>
                    <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('images/green_vegetables.jpg');">
                        <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
                            <a href="page3.php"><h2 uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;" style="color: #000;">ПИТАТЕЛЬНЫЕ ВЕЩЕСТВА</h2></a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-left">
                    <img src="images/milk.jpg" alt="" uk-cover>
                    <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('images/green_vegetables.jpg');">
                        <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
                            <a href="page4.php"><h2 uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;" style="color: #000;">КОНТАКТЫ</h2></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div> -->
</header>