<?php
session_start();
include_once('conexao.php');

if((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true))
{
    header("Location: TelaAlerta.php");
} else {
    header("Location: TelaMinhaPublica.php"); 
}

?>