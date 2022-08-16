<?php
session_start();
include_once('conexao.php');

if((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true))
{
    header("Location: TelaCadastro.php");
} else {
    header("Location: TelaLogin.php"); 
}

?>