@extends('layout.app', ['current' => 'sobre-nos'])

@section('body')

    <br>
    <div class="container">
        <div class="row justify-content-center">
            <h1>Cadastro</h1>
        </div>
        <div class="row justify-content-center">
            <hr style="width: 25%;">
        </div>
        <div class="row justify-content-center">
            <h5>É muito importante que você crie um usuário. Isso será necessário para que você crie times para torneios.
                Além disso, você apenas poderá comprar seus ingressos quando tiver um usuário.
                Para criar seu TLC, digite seus dados abaixo.
                <strong>Caso seja menor de 14 anos, é necessário autorização dos pais.</strong></h5>
        </div>

        <br>

        <br>

        <form action="" class="form-horizontal" id="formCadastro">
            <div class="form-group">
                <label for="nome">
                    Nome:
                </label>
                <input type="text" placeholder="Digite seu nome" id="nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="dta_nasc">
                    Data de nascimento:
                </label>
                <input type="date" placeholder="" id="dta_nasc" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">
                    E-mail:
                </label>
                <input type="email" placeholder="Digite seu e-mail" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="cpf">
                    CPF:
                </label>
                <input type="text" placeholder="Digite seu CPF" id="cpf" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">
                    Senha:
                </label>
                <input type="password" placeholder="Digite sua senha" id="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="password_conf">
                    Confirme sua Senha:
                </label>
                <input type="password" placeholder="Confirme sua senha" id="password_conf" class="form-control">
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
            </div>
        </form>

    </div>
    <br>
    <br>

@endsection