<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('open-iconic/font/css/open-iconic-bootstrap.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            background-color: #191730;
        }
        hr {
            background-color: #707070;
        }
        h5, h4, h3, h2, h1, label {
            color: #ffffff;
        }
        #buscar{
            background-color: #171626;
        }
    </style>
</head>
<body>
{{--<div class="container">--}}
    @component('componente_navbar', ["current" => $current])
    @endcomponent
    <main role="main">
        @hasSection('body')
            @yield('body')
        @endif
    </main>
{{--</div>--}}

<!-- Footer -->
<div class="container">
    <footer class="page-footer font-small pt-4">

        <div class="container-fluid text-center text-md-left">


            <div class="row">

                <div class="col-md-4 mb-md-0 mb-3">

                    <h5 class="text-uppercase">Saiba Mais</h5>

                    <hr>

                    <ul class="list-unstyled">
                        <li>
                            @guest
                            <a href="/login-franqueado">Sistema do Franqueado</a>
                            @else
                            <a href="/franqueado">Sistema do Franqueado</a>
                            @endguest
                        </li>
                        <li>
                            <a href="/sobre-nos">Sobre Nós</a>
                        </li>
                        <li>
                            <a href="#!">A Equipe</a>
                        </li>
                        <li>
                            <a href="#!">Termos de Uso</a>
                        </li>
                    </ul>

                </div>

                <div class="col-md-4 mb-md-0 mb-3">

                    <h5 class="text-uppercase">Contatos</h5>

                    <hr>

                    <ul class="list-unstyled">
                        <li>
                            <a href="/seja-franqueado">Seja um Franqueado</a>
                        </li>
                        <li>
                            <a href="#!">Suporte</a>
                        </li>
                    </ul>

                </div>

                <div class="col-md-4 mb-md-0 mb-3">


                    <h5 class="text-uppercase">Redes Sociais</h5>

                    <hr>

                </div>


            </div>


        </div>




    </footer>
</div>


<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

@hasSection('javascript')
    @yield('javascript')
@endif
</body>
</html>