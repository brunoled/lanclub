@extends('layout.app', ['current' => 'sobre-nos'])

@section('body')

    <br>
    <div class="container">
        <div class="row justify-content-center">
            <h1>Cadastro de Franqueado</h1>
        </div>
        <div class="row justify-content-center">
            <hr style="width: 25%;">
        </div>
        <div class="row justify-content-center">
            <h5>Crie um usuário de franqueado para poder cadastrar seus eventos e administra-los pela plataforma.</h5>
        </div>

        <br>

        <br>

        <form action="" class="form-horizontal" id="formCadastro">
            <div class="form-group">
                <label for="nomeE">
                    Nome da empresa:
                </label>
                <input type="text" placeholder="Digite o nome de sua Empresa" id="nomeE" class="form-control">
            </div>
            <div class="form-group">
                <label for="cnpj">
                    CNPJ:
                </label>
                <input type="text" placeholder="Digite o CNPJ da sua Empresa" id="cnpj" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">
                    E-mail:
                </label>
                <input type="email" placeholder="Digite seu e-mail empresarial" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="cep">
                    CPF:
                </label>
                <input type="text" placeholder="Digite o CEP de sua empresa" id="cep" class="form-control">
            </div>
            <div class="form-group">
                <label for="setor">
                    Setor:
                </label>
                <input type="text" placeholder="Digite o setor onde sua empresa se localiza" id="setor" class="form-control">
            </div>
            <div class="form-group">
                <label for="rua">
                    Rua:
                </label>
                <input type="text" placeholder="Digite a rua onde sua empresa se localiza" id="rua" class="form-control">
            </div>
            <div class="form-group">
                <label for="complemento">
                    Complemento:
                </label>
                <input type="text" placeholder="" id="complemento" class="form-control">
            </div>
            <div class="form-group">
                <label for="provedor">
                    Provedor de Internet:
                </label>
                <input type="text" placeholder="" id="provedor" class="form-control">
            </div>
            <div class="form-group">
                <label for="velocidade">
                    Velocidade do link de internet (Em MB):
                </label>
                <input type="number" placeholder="" id="velocidade" class="form-control">
            </div>
            <div class="form-group">
                <label for="qtdpc">
                    Quantidade de Computadores disponíveis para jogo:
                </label>
                <input type="number" placeholder="" id="qtdpc" class="form-control">
            </div>
            <div class="form-group">
                <label for="nomeCEO">
                    Nome CEO:
                </label>
                <input type="text" placeholder="Digite o nome do dono da Empresa" id="nomeCEO" class="form-control">
            </div>
            <div class="form-group">
                <label for="cpfCEO">
                    CPF CEO:
                </label>
                <input type="text" placeholder="Digite o CPF do dono da Empresa" id="cpfCEO" class="form-control">
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