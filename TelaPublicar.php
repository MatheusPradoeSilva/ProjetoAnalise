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
    <form action= "publicar.php" method= "POST" enctype="multipart/form-data">
    <div class = corpo>
   
    <div class="form-group">
                <input class="form-control" type="file" name="file_name" placeholder="Limite : 250x250" />
            </div>
        <lable>Título</lable><br>
        <input type="text" name="titulo" id="titulo" placeholder="Digite aqui o título de sua publicação" required>
        <br><br>
        <lable>Descrição</lable><br>
        <input type="text" name="descr" id="descr" placeholder="Digite aqui a descrição" required>
        <br><br>
        <lable>Conteúdo</label>
        <br>
        <textarea name="content" id="content" placeholder="Digite aqui sua publicação"></textarea>
        <br><br>
    <select name="categ" id="categ">
        <option value="arte "> Arte </option>
        <option value="música"> Música </option>
        <option value="esportes"> Esportes </option>
        <option value="culinária"> Culinária </option>
        <option value="pets"> Pets </option>
        <option value="famosos"> Famosos </option>
    </select>

        <br><br>
        <button input class = "public" type= "submit" name= "publi" id= "publi" onclick="return confirm('Sua publicação está sendo verificada, aguarde a confirmação por e-mail')" >Publicar</button>
        <button input class = "public" type= "submit" name= "cancel" id= "cancel">Cancelar</button>
    </div>
</form>

</body>


</html>
