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
   <title>Minhas publicações</title>
   <div class = corpo>
   <head>
    <h1>Suas publicações</h1><br>
    <?php

    $id_user = $_SESSION['id_user'];

     $sql = "SELECT * FROM publicacao WHERE id_user = '$id_user' and Status = 'Aceito'";
     $result = $conexao->query($sql);
 
     while($row = mysqli_fetch_array($result)){
        ?>
        <a href="verpost_admin.php?id_post=<?php echo $row['id_post'] ?>">
        <?php echo "<h3>".$row["titulo"]."<br>";
        echo "<h5>".$row["descricao"]."<br>";
        echo "<h4>".$row["categoria"]."<br>";
        ?>
        </a>
        <a href="deletar_publi.php?id_post=<?php echo $row['id_post']; ?>" onclick="return confirm('Tem certeza que deseja deletar esta postagem?')">
     Deletar</a>
     <?php
     }
    
     

    ?>
    
</head>
<body>

</body>


</html>
