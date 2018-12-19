@extends('layout.app', ['current' => 'sobre-nos'])

@section('body')

    <br>
    <div class="container">
        <div class="row justify-content-center">
            <h1>Login Franqueado</h1>
        </div>
        <div class="row justify-content-center">
            <hr style="width: 25%;">
        </div>
        <div class="row justify-content-center">
            <h5>Entre para cadastrar eventos e verificar status dos seus eventos atuais.</h5>
        </div>

        <br>

        <br>

        <div class="container">
            <div class="row justify-content-center">
                <form action="" class="form-horizontal" id="formLogin">
                    <div class="form-group">
                        <label for="user">
                            Franqueado:
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
                <h5>Ainda não é um franqueado? Cadastre-se clicando no botão abaixo!</h5>
            </div>
            <br>
            <div class="row justify-content-center">
                <a href="/cadastrar-franqueado" class="btn btn-lg btn-success">Cadastrar</a>
            </div>

        </div>



    </div>
    <br>
    <br>

@endsection