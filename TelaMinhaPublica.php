<?php
include("menu.php");
include("conexao.php");
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-store" />
<meta name="viewpoet" content="width-device-width">
    <link rel="stylesheet" type="text/css" href="cssanalise.css" />
   <title>Alerta</title>
   <div class = corpo>
   <head>
    <h1>Suas publicações</h1><br>
    <?php

    $id_user = $_SESSION['id_user'];

     $sql = "SELECT * FROM publicacao WHERE id_user = '$id_user'";
     $result = $conexao->query($sql);
 
     $cont = mysqli_num_rows($result);

     while($row = mysqli_fetch_array($result)){
        echo "<h3>".$row["titulo"]."<br>";
        echo "<h5>".$row["descricao"]."<br>";
        echo "<h4>".$row["categoria"]."<br>";
     }
/*
    $result = mysqli_query($conexao, "SELECT COUNT(*) FROM publicacao where id_user = '$id_user'") or die(mysqli_error());

    echo "$result";
   
    while($sql=mysqli_fetch_array($result)){
           
    echo $sql["titulo"];

    }*/
    ?>
    
</head>
<body>

</body>


</html>
