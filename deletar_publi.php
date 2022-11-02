<?php

include_once("conexao.php");

$id_post=$_GET['id_post'];
$query = "DELETE FROM publicacao WHERE id_post=$id_post"; 
$result = mysqli_query($conexao,$query) or die ( mysqli_error($conexao));

if($result)
header("Location: TelaMinhaPublica.php"); 
?>