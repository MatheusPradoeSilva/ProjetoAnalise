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
    <title>Ver Publicaçao</title>
    <div class=corpo>

        <head>
            <h1>Publicação aceita</h1><br>


        </head>

<body>


    <?php

    $id_post = $_GET['id_post'];

    $sql = "SELECT *
    FROM publicacao  p INNER JOIN usuario  u on u.id_user = p.id_user where p.id_post = '$id_post'";
    $result = $conexao->query($sql);


?>
<?php
    while ($linha = mysqli_fetch_array($result)) {
        echo "<h4>" . $linha["nome"] . "<br>";
        echo "<h4>" . $linha["email"] . "<br>";
        echo "<img src='{$linha['image']}'<br>";
        echo "<h3>" . $linha["titulo"] . "<br>";
        echo "<h5>" . $linha["descricao"] . "<br>";
        echo "<h5>" . $linha["conteudo"] . "<br>";
        echo "<h4>" . $linha["categoria"] . "<br>";
        echo "<h4>" . $linha["Status"] . "<br>";

    ?>

    <br> <br>

    <a href="publicaceitas.php?">Voltar</a>

        <?php
    }
        ?>
</body>


</html>