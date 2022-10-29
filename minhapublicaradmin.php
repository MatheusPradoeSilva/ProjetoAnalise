<?php
session_start();
include_once('conexao.php');

if((!isset($_SESSION['email']) == 'admin@gmail.com' ) and (!isset($_SESSION['senha']) == 'eusouadmin'))
{
    header("Location: TelaAlerta.php");
} else {
    header("Location: TelaPublicarAdmin.php"); 
}

?>