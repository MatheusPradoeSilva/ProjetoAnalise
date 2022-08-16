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
    <form action= "cadastro.php" method= "POST">
    <h1>Crie aqui sua conta!</h1>
    <h5>Já possui uma conta? Faça o seu login<a href='TelaLogin.php'> aqui</a><h5>
    <div>
        <h2>Cadastro</h2>
        <lable>Nome</lable><br>
        <input type="text" name="nome" id="nome" placeholder="Insira seu nome">
        <br><br>
        <lable>Senha</lable><br>
        <input type="password" name="senha" id="senha" placeholder="Insira sua senha">
        <br><br>
        <lable>Email</lable><br>
        <input type="email"name="email" id="email" placeholder="Insira seu email">
        <br><br>
        <button input type= "submit" name= "entrar" id= "entrar">Entrar</button>
    </div>


</body>


</html>
