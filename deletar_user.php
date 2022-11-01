<?php

include_once("conexao.php");

$id_user=$_GET['id_user'];
$query = "DELETE FROM usuario WHERE id_user = '$id_user'"; 
$result = mysqli_query($conexao,$query) or die ( mysqli_error($conexao));

if($result)
header("Location:index.php"); 
?>