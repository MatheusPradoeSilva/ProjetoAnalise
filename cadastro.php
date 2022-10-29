<?php

include_once('conexao.php');

include("menu.php");

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];

    $sql = "SELECT * FROM usuario WHERE email = '$email' and senha= '$senha'";
    $result = $conexao->query($sql);

    $pegaEmail = $conexao->query("SELECT * FROM usuario WHERE email = '$email'");

    if(mysqli_num_rows($pegaEmail) == 1){

        echo"<h3>Esse email ja existe! Crie outro.";
    }else{ 
         $result = mysqli_query($conexao, "INSERT INTO usuario(nome, senha, email) 
        VALUES('$nome', '$senha', '$email')");
    
      
    header("Location: minhaconta.php");
}


?>