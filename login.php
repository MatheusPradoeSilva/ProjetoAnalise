<?php

session_start();

include_once('conexao.php');

if(isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    
    $senha = $_POST['senha'];
    $email = $_POST['email'];


    $sql = "SELECT * FROM usuario WHERE email = '$email' and senha= '$senha'";
    $result = $conexao->query($sql);

    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) < 1)
    {   
        header("Location: TelaLogin.php");
    }else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['id_user'] = $row['id_user']; 

        header("Location: index.php") ;
       
    }


}

?>