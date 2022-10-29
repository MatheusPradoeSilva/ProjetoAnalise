<!DOCTYPE html>
<html lang="pt-BR">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="cssanalise.css" />

<nav>
  <ul class="container">
    <div class="dropdown">
      <input type="image" class="menubot" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAV0lEQVRIie3SsQ2AMBADQD9zoOwDg7C4B3GaREJRJES+gMLXfWN/YcDekHRKotZR0nHPjKGAAPbkn4yI0o8tGfZoLLgAMJHHlmGLPNMZz/RnPNMZz/R7FeMv6QUDfUW1AAAAAElFTkSuQmCC" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-angle-down"></i>

      <ul class="dropdown-menu">
        <?php session_start();


        if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
          echo " <li class='dropdown'>
      <div class='mega-menu'>
          <div class='container'>
            <div class='item'>     
            <li><a href='paginaentradaadmin.php'>Início</a></li>
            <li><a href='usuarios.php'>Usuários</a></li>
            <li><a href='regras.php'>Regras do site</a></li>
            <li><a href='publicrecebidas.php'>Publicações Recebidas</a></li>
            <li><a href='publicaceitas.php'>Publicaçõe Aceitas</a></li>
            <li class = 'linamenu'>________________</li>
            <li><h5>CATEGORIAS<h5></li>
            <li><a href='#'>Arte</a></li>
            <li><a href='#'>Música</a></li>
            <li><a href='#'>Esportes</a></li>
            <li><a href='#'>Culinária</a></li>
            <li><a href='#'>Famosos</a></li>
            <li><a href='#'>Pets</a></li>";

          unset($_SESSION['email']);
          unset($_SESSION['senha']);
        } else {
          $logado = $_SESSION['email'];

          echo "$logado
  
   <li class='dropdown'>
   <div class='mega-menu'>
       <div class='container'>
         <div class='item'>     
          <li><a href='paginaentradaadmin.php'>Início</a></li>
         <li><a href='usuarios.php'>Usuários</a></li>
         <li><a href='regrasadmin.php'>Regras do site</a></li>
         <li><a href='publicrecebidas.php'>Publicações Recebidas</a></li>
         <li><a href='publicaceitas.php'>Publicaçõe Aceitas</a></li>
         <li class = 'linamenu'>________________</li>
         <li><h5>CATEGORIAS<h5></li>
         <li><a href='categ_arte_admin.php'>Arte</a></li>
         <li><a href='categ_musica_admin.php'>Música</a></li>
         <li><a href='categ_esporte_admin.php'>Esportes</a></li>
         <li><a href='categ_culinaria_admin.php'>Culinária</a></li>
         <li><a href='categ_famosos_admin.php'>Famosos</a></li>
         <li><a href='categ_pets_admin.php'>Pets</a></li>
         <form action= 'sairconta.php'>
         <li><button name ='exit' id ='exit' type='submit'>Sair da conta</button></li>
         <div>
         </form>";
        }

        ?>
      </ul>
    </div>
    </div>

    <li class='dropdown'>
      <a href='#home'><i class="fa fa-angle-down"></i></a>



      <div class="barra">
<form action= "pesquisar_admin.php" method= "POST">
      <input type="text" class="o" name="busc" id ="busc" placeholder="Pesquisar">
      <input type="image" id="lupa" name = "lupa" src="img/icons8-pesquisar-50.png" class ="lupa"> 
</form>
    </ul>
</div>

</nav>