<?php
include("menuadmin.php");
include("conexao.php");
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-store" />
<meta name="viewpoet" content="width-device-width">
    <link rel="stylesheet" type="text/css" href="cssanalise.css" />
   <title>Aba deliciosa</title>
   <div class = corpo>
   <head>
    <h1>Culinária</h1><br>
    <?php

     $sql = "SELECT * FROM publicacao WHERE categoria = 'Culinária' and Status = 'Aceito'";
     $result = $conexao->query($sql);
 
     while($row = mysqli_fetch_array($result)){
        ?>
              <a href="verpost.php?id_post=<?php echo $rows['id_post'] ?>">
                <?php 
                echo"<h3>".$rows['nome']."<br>";
                echo "<h2>".$rows['titulo']."<br>";
                echo "<img src='{$linha['image']}'>";
                echo "<h4>".$rows['descricao']."<br>";
                echo "<h4>".$rows['conteudo']."<br>";
                echo "<h4>".$rows['categoria']."<br>";
                echo"___________________";
                ?>
                
              </a>
                <?php
             }
            ?>
    
</head>
<body>

</body>


</html>