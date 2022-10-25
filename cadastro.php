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

<<<<<<< HEAD
header("Location: minhaconta.php");
=======
    
    echo "<h2>Cadastro feito com sucesso!";
>>>>>>> 32e3b99 (atualização categoria)
   
   
   
}else 
{

    echo "<h2>Ocorreu algum erro inseperado, tente novamente !";

}


?>