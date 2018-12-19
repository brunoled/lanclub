@extends('layout.app', ['current' => 'sobre-nos'])

@section('body')

    <br>
    <div class="container">
        <div class="row justify-content-center">
            <h1>Login Meu TLC</h1>
        </div>
        <div class="row justify-content-center">
            <hr style="width: 25%;">
        </div>
        <div class="row justify-content-center">
            <h5>Logue-se no sistema para ter acesso a suas estatísticas e para cadastrar-se nos eventos.</h5>
        </div>

        <br>

        <br>

        <div class="container">
            <div class="row justify-content-center">
                <form action="" class="form-horizontal" id="formLogin">
                    <div class="form-group">
                        <label for="user">
                            Usuario:
                        </label>
                        <input type="text" placeholder="Digite seu usuário" id="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">
                            Senha:
                        </label>
                        <input type="password" placeholder="Digite sua senha" id="password" class="form-control">
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
                    </div>
                </form>
            </div>

            <br>
            <hr>
            <br>
            <div class="row justify-content-center">
                <h5>Você ainda não tem um cadastro? Cadastre-se já clicando no botão abaixo!</h5>
            </div>
            <br>
            <div class="row justify-content-center">
                <a href="/cadastrar" class="btn btn-lg btn-success">Cadastrar</a>
            </div>

        </div>



    </div>
    <br>
    <br>

@endsection