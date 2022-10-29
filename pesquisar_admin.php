<?php

include_once('conexao.php');
include('menuadmin.php');

if(!isset($_POST['lupa']) == 1){
  
  $pesquisar = $_POST['busc'];
  $categoria = $_POST['busc'];
  $conteudo = $_POST['busc'];
  $descricao = $_POST['busc'];

  $result = "SELECT * FROM publicacao WHERE titulo LIKE '%$pesquisar%' 
  or categoria like '%$categoria%' 
  or conteudo like '%$conteudo%' 
  or descricao like '%$descricao%'";
  $resultado = mysqli_query($conexao, $result);
  
  echo "<h3>Você pesquisou: $pesquisar<br>";
  echo"___________________";
  while($rows = mysqli_fetch_array($resultado)){
  
      echo "<h2>".$rows['titulo']."<br>";
      echo "<h4>".$rows['conteudo']."<br>";
      echo "<h4>".$rows['descricao']."<br>";
      echo "<h4>".$rows['categoria']."<br>";
      echo"___________________";
    
  }
}
  
?>