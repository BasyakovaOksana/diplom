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
</nav>


@extends('layouts.app')

@extends('header')

@section('content')

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
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

@endsection




