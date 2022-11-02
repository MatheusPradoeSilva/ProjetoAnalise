<?php

include_once('conexao.php');
include("menu.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-store" />
<meta name="viewpoet" content="width-device-width">
    <link rel="stylesheet" type="text/css" href="cssanalise.css" />
   <title>Tela de Login</title>
</head>
<body>
<form action= "login.php" method= "POST">
    <h1>Login</h1>
    <h5>Faça login para continuar<br>Não possui conta? Realize seu cadastro<a href='TelaCadastro.php'> aqui</a><h5>
    <div>
  
        <lable>Email</lable><br>
        <input type="email" name= "email" id= "email" placeholder="Insira seu email" required>
        <br><br>
        <lable>Senha</lable><br>
        <input type="password" name= "senha" id= "senha" placeholder="Insira sua senha" required>
        <h5><a href='TelaEsqSen.php'> Esqueci minha senha</a><h5>
        
        
        <button input class = "public"type= "submit" name= "login" id= "login">Login</button>
    </div>


</body>


</html>
