<?php 
session_start();
include_once('conexao.php');

if(isset($_POST['exit']))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: index.php");
}
header("Location: index.php");
?>