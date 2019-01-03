<nav class="navbar navbar-expand-lg navbar-dark rounded" style="background-color: #171626">
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse"
            data-target="#navbar" aria-controls="navbar"
            aria-expanded="false" aria-label="Toggle navigation"><img src="{{ asset('logo.png') }}" width="112" height="28"></button>

    <div class="collapse navbar-collapse" id="navbar">
        <a class="navbar-brand" href="#"><img src="{{ asset('logo.png') }}" width="112" height="28"></a>
        <ul class="nav navbar-nav nav-fill w-100">
            {{--@guest--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="">{{ __('Login') }}</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--@if (Route::has('register'))--}}
                        {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>--}}
                    {{--@endif--}}
                {{--</li>--}}
            {{--@else--}}
            @guest
                <li @if($current=="home")class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link" href="http://lanclub.com.br/lanclub/public/"><span class="oi oi-home"></span> Home</a>
                </li>
                <li @if($current=="sobre_nos")class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link" href="http://lanclub.com.br/lanclub/public/sobre-nos"><span class="oi oi-question-mark"></span> Sobre Nós</a>
                </li>
                <li @if($current=="eventos")class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link" href="http://lanclub.com.br/lanclub/public/eventos"><span class="oi oi-calendar"></span> Eventos</a>
                </li>
                <li @if($current=="fale_conosco")class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link" href="http://lanclub.com.br/lanclub/public/fale-conosco"><span class="oi oi-chat"></span> Fale Conosco</a>
                </li>
                <li @if($current=="logar")class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link" href="http://lanclub.com.br/lanclub/public/login"><span class="oi oi-person"></span> Logar</a>
                </li>
                <li>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" id="buscar">
                    </form>
                </li>

            @endguest

                {{--<li class="nav-item dropdown">--}}
                    {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                        {{--{{ Auth::user()->usuario }} <span class="caret"></span>--}}
                    {{--</a>--}}

                    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                        {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                           {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                            {{--{{ __('Logout') }}--}}
                        {{--</a>--}}

                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                            {{--@csrf--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--@endguest--}}
        </ul>
    </div>
</nav>