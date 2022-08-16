<?php
include('rodape.php');

session_start();

if((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
} else{
    $logado = $_SESSION['email'];
    echo "Bem vindo $logado";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-store" />
<meta name="viewport" content="width-device-width">

</head>
<body>

    <h2>Compartilhe conosco!</h2>
    <h4>Venha se juntar á nós e compartilhe já seus<br>
     artigos, ideais, receitas e muito mais.
     <br><br>
    Publique no botão abaixo e seja feliz!</h4>

    <button>Publicar</button>

</body>


</html>

