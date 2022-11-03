<?php

include_once('conexao.php');
include('menuadmin.php');
    
    $id_post = $_GET['id_post'];

    $sql = "SELECT *
    FROM publicacao  p INNER JOIN usuario  u on u.id_user = p.id_user where p.id_post = '$id_post'";
    $result = $conexao->query($sql);

    while($rows = mysqli_fetch_array($result)){

      echo "<h1>".$rows['titulo']."<br>";
      echo "<img src='{$rows['image']}'>";
      echo "<h3>".$rows['descricao']."<br>";
      echo "<h4>".$rows['conteudo']."<br>";


}
  
?>