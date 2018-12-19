@extends('layout.app', ['current' => 'sobre-nos'])

@section('body')

    <br>
    <div class="container">
        <div class="row justify-content-center">
            <h1>Fale Conosco</h1>
        </div>
        <div class="row justify-content-center">
            <hr style="width: 25%;">
        </div>
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
    <br>
    <br>

@endsection