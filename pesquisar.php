<?php

include_once('conexao.php');
include('menu.php');


if(!isset($_POST['lupa']) == 1){

  $pesquisar = $_POST['busc'];
  $categoria = $_POST['busc'];
  $conteudo = $_POST['busc'];
  $descricao = $_POST['busc'];


  $result = "SELECT * FROM publicacao WHERE titulo LIKE '%$pesquisar%' and Status = 'Aceito'
  or categoria like '%$categoria%' and Status = 'Aceito'
  or conteudo like '%$conteudo%' and Status = 'Aceito'
  or descricao like '%$descricao%' and Status = 'Aceito'";
    $resultado = mysqli_query($conexao, $result);
    
    echo "<h3>Você pesquisou: $pesquisar<br>";
    echo"___________________<br>";
    
    while($rows = mysqli_fetch_array($resultado)){

  ?>
      
      <a href="verpost.php?id_post=<?php echo $rows['id_post'] ?>">
      <?php echo "<h2>".$rows['titulo']."<br>";
      echo "<h4>".$rows['descricao']."<br>";
      echo "<h4>".$rows['conteudo']."<br>";
      echo "<h4>".$rows['categoria']."<br>";
      echo"___________________";
      ?>
      
    </a>
      <?php
}
}
  
?>