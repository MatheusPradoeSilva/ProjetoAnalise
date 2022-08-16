<?php

include_once('conexao.php');
include('rodape.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-store" />
<meta name="viewpoet" content="width-device-width">
    <link rel="stylesheet" type="text/css" href="cssanalise.css" />
   <title>Tela de Cadastro</title>
</head>
<body>

    <h1>Esqueceu sua senha?</h1>
    <h5>Crie uma nova senha<h5>
    <div>

        <lable>Email</lable><br>
        <input type="email" placeholder="Insira seu email">
        <br><br>
        <lable>Nova senha</lable><br>
        <input type="password" placeholder="Insira sua senha">
        <br><br>
        <lable>Digite novamente a nova senha</lable><br>
        <input type="password" placeholder="Insira sua senha">
        <br><br>
        
        <button>Enviar</button>
    </div>


</body>


</html>
