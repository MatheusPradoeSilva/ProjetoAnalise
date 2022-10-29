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
   <title>Aba musical</title>
   <div class = corpo>
   <head>
    <h1>Música</h1><br>
    <?php

     $sql = "SELECT * FROM publicacao WHERE categoria = 'Música'";
     $result = $conexao->query($sql);
 
     while($row = mysqli_fetch_array($result)){
        echo "<h3>".$row["titulo"]."<br>";
        echo "<h5>".$row["descricao"]."<br>";
        echo "<h4>".$row["categoria"]."<br>";
     }
    ?>
    
</head>
<body>

</body>


</html>