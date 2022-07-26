<?php

require_once 'src/usuario.php';

if (isset($_POST['nome_completo'])) {
    $nomeUsuario = new \Alura\Usuario($_POST['nome_completo']);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Curso Strings</title>
</head>

<body>

    <div class="mx-5 my-5">
        <h1>Cadastro feito com sucesso.</h1>
        <p>Seguem os dados de sua conta:</p>
        <ul class="list-group">
            <li class="list-group-item">
                <strong>Primeiro nome: </strong> <?php if (isset($_POST['nome_completo'])) echo $nomeUsuario->getNome() ?>
            </li>
            <li class="list-group-item">
                <strong>Sobrenome: </strong><?php if (isset($_POST['nome_completo'])) echo $nomeUsuario->getSobrenome() ?>
            </li>
            <li class="list-group-item">Usuário: </li>
            <li class="list-group-item">Senha: </li>
            <li class="list-group-item">Telefone: </li>
            <li class="list-group-item">Email: </li>
            <li class="list-group-item">Endereço: </li>
        </ul>
    </div>
</body>

</html>