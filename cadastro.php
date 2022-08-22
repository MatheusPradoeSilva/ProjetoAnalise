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

    
   echo "Sua conta foi cadastrada com sucesso!";
   
   
   
}else 
{

    echo "Ocorreu algum erro inseperado, tente novamente !";

}


?>