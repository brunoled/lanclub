@extends('layout.app', ['current' => 'home'])

@section('body')

    <div class="container">
        <div id="carroselEventos" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carroselEventos" data-slide-to="0" class="active"></li>
                <li data-target="#carroselEventos" data-slide-to="1"></li>
                <li data-target="#carroselEventos" data-slide-to="2"></li>
                <li data-target="#carroselEventos" data-slide-to="3"></li>
                <li data-target="#carroselEventos" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner h-50">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="..." alt="">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carroselEventos" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carroselEventos" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>

        <br>
        <br>

        <div id="proximosEventos">
            <h4>Próximos Eventos</h4>


            <hr>


        </div>
    </div>



@endsection