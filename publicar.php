<?php
session_start();
include_once('conexao.php');

include("menu.php");

if(isset($_POST['publi']))
{

    $titulo = $_POST['titulo'];
    $descr = $_POST['descr'];
    $content = $_POST['content'];

    $result = mysqli_query($conexao, "INSERT INTO publicacao(titulo, descricao, conteudo) 
   VALUES('$titulo', '$descr', '$content')");

  print_r($result);
   
}else 
{

    echo "Ocorreu algum erro inseperado, tente novamente !";

}


?>