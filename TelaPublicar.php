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
    <form action= "publicar.php" method= "POST">
    <div class = corpo>
   
  <input type="file" name="image" accept="image/png, image/gif, image/jpeg" /><br>

        <lable>Título</lable><br>
        <input type="text" name="titulo" id="titulo" placeholder="Digite aqui o título de sua publicação">
        <br><br>
        <lable>Descrição</lable><br>
        <input type="text" name="descr" id="descr" placeholder="Digite aqui a descrição (opcional)">
        <br><br>
                    <br>
        <input type="text"name="content" id="content" placeholder="Digite aqui sua publicação">
        <br><br>
        <button input class = "public" type= "submit" name= "publi" id= "publi">Publicar</button>
        <button input class = "public" type= "submit" name= "cancel" id= "cancel">Cancelar</button>
    </div>


</body>


</html>
