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
   <title>Publicando</title>
</head>
<body>
    <form action= "cadastro.php" method= "POST">
    <div class = corpo>
        <lable>Título</lable><br>
        <input type="text" name="titulo" id="titulo" placeholder="Digite aqui o título de sua publicação">
        <br><br>
        <lable>Descrição</lable><br>
        <input type="text" name="desc" id="desc" placeholder="Digite aqui a descrição (opcional)">
        <br><br>
            <br>
        <input type="email"name="email" id="email" placeholder="Digite aqui sua publicação">
        <br><br>
        <button input class = "public" type= "submit" name= "publi" id= "publi">Publicar</button>
        <button input class = "public" type= "submit" name= "cancel" id= "cancel">Cancelar</button>
    </div>


</body>


</html>
