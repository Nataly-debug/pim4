<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel="stylesheet" type="text/css" href="main.css" media="screen" />

</head>
<body class="format">
@extends('painel')
@section('conteudo')
<br>
<h1>Cadastre-se</h1>
<section class="contact-wrap">
    <form action="" class="contact-form">
        <div class="col-sm-6">
            <div>
                <label for="">Primeiro nome: </label>
                <input type="text" class="input-block">
            </div>
        </div>
        <div class="col-sm-6">
            <div>
                <label for="">Último nome: </label>
                <input type="text" class="input-block">
            </div>
        </div>
        <div class="col-sm-6">
            <div>
                <label for="">Endereço: </label> <br>
                <input type="numero" class="input-block">
            </div>
        </div>
        <div class="col-sm-6">
            <div>
                <label for="">Informe seu CPF: </label> 
                <input type="text" class="input-block">
            </div>
        </div>
        <div class="col-sm-6">
            <div>
                <label for="">Data de nascimento: </label> 
                <input type="date" class="input-block">
            </div>
        </div> 
        <div class="col-sm-6">
            <div class="input-block">
                <select type="numero" class="form-control"> 
                    <option value="">Informe seu estado: </option>
                    <option value="DF">DF</option>
                    <option value="RJ">RJ</option>
                    <option value="SP">SP</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-block">
                <select type="numero" class="form-control"> 
                    <option value="">Informe sua cidade: </option>
                    <option value="Brasília">Brasília</option>
                    <option value="RJ">Cidade do Rio</option>
                    <option value="SP">Cidade de São Paulo</option>
                </select>
            </div>
        </div>

        </div>
        <div class="col-sm-6">
            <div>
                <label for="">Telefone: </label>
                <input type="numero" class="input-block">
            </div>
        </div> <br>
        <div class="col-sm-6">
            <div>
                <label for="">Crie uma senha: </label>
                <input type="password" class="input-block">
            </div>
        </div>
        <div class="col-sm-6">
            <div>
                <label for="">Confirme sua senha: </label>
                <input type="password" class="input-block">
            </div>
        </div>

        <div class="col-sm-12">
        <a href="/login"><button class="square-button">Cadastrar</button></a> <br><br>
        </div>

    </form>

</section>

@endsection
</body>
</html>

