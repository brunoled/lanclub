@extends('layout.app', ['current' => 'home'])

@section('body')

    <div class="home">
        <div class="container">
            <video src="" width="100%" controls>

            </video>
        </div>
    </div>

    <div class="sobre-nos">
        <div class="container">
            <h1 id="sbtext">Sobre nós</h1>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="" alt="Imagem1">
                        <div>
                            <div class="card-body">
                                <p class="card-text">The Lan Club é um projeto voltado para pessoas que tem interesse
                                    em jogar e se divertir com seus amigos em jogos online além de conhecer outras pessoas
                                com o mesmo interesse.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="" alt="Imagem1">
                        <div>
                            <div class="card-body">
                                <p class="card-text">The Lan Club é um projeto voltado para pessoas que tem interesse
                                    em jogar e se divertir com seus amigos em jogos online além de conhecer outras pessoas
                                    com o mesmo interesse.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="" alt="Imagem1">
                        <div>
                            <div class="card-body">
                                <p class="card-text">The Lan Club é um projeto voltado para pessoas que tem interesse
                                    em jogar e se divertir com seus amigos em jogos online além de conhecer outras pessoas
                                    com o mesmo interesse.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="eventos">
        <div class="container">
            <h1 id="sbtext">Eventos</h1>
            <hr>
        </div>
    </div>

    <div class="faleconosco">
        <div class="container">
            <h1 id="sbtext">Fale Conosco</h1>
            <hr>
            <div class="row justify-content-center">
                <h5>Teve alguma dúvida? Precisa de esclarecer algo? Mande-nos sua mensagem e responderemos o mais
                    rápido possível.</h5>
            </div>

            <br>

            <br>

            <form action="" class="form-horizontal" id="formFaleconosco">
                <div class="form-group">
                    <label for="nome">
                        Nome:
                    </label>
                    <input type="text" placeholder="Digite seu nome" id="nome" class="form-control">
                </div>
                <div class="form-group">
                    <label for="assunto">
                        Assunto:
                    </label>
                    <input type="text" placeholder="Qual o assunto que deseja tratar?" id="assunto" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">
                        E-mail para contato:
                    </label>
                    <input type="email" placeholder="Digite seu e-mail" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mensagem">
                        Mensagem:
                    </label>
                    <textarea placeholder="Digite a mensagem" rows="4" id="mensagem" class="form-control"></textarea>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                </div>


            </form>

        </div>
    </div>




@endsection