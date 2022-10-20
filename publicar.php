<?php
include_once('conexao.php');

include("menu.php");

if(isset($_POST['publi']))
{

    $titulo = $_POST['titulo'];
    $descr = $_POST['descr'];
    $content = $_POST['content'];
    $id_user = $_SESSION['id_user'];
    $categ = $_POST['categ'];

    $result = mysqli_query($conexao, "INSERT INTO publicacao(titulo, descricao, conteudo, id_user, categoria) 
   VALUES('$titulo', '$descr', '$content', '$id_user', '$categ')");
   
   header("Location: TelaMinhaPublica.php");
   
}else 
{
    echo "Ocorreu algum erro inseperado, tente novamente !";
}


?>