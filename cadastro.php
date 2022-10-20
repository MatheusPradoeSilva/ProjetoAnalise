<?php

include_once('conexao.php');

include("menu.php");

if(isset($_POST['entrar']))
{

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];


    $result = mysqli_query($conexao, "INSERT INTO usuario(nome, senha, email) 
    VALUES('$nome', '$senha', '$email')");

header("Location: minhaconta.php");
   
   
   
}else 
{

    echo "<h2>Ocorreu algum erro inseperado, tente novamente !";

}


?>