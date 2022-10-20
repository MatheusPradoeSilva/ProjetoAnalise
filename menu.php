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
    <input type="image" class= "menubot" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAV0lEQVRIie3SsQ2AMBADQD9zoOwDg7C4B3GaREJRJES+gMLXfWN/YcDekHRKotZR0nHPjKGAAPbkn4yI0o8tGfZoLLgAMJHHlmGLPNMZz/RnPNMZz/R7FeMv6QUDfUW1AAAAAElFTkSuQmCC" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i>
   
    <ul class="dropdown-menu">
      <?php session_start(); 
      

if((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true))
{
  echo " <li class='dropdown'>
      <div class='mega-menu'>
          <div class='container'>
            <div class='item'>     
            <li><a href='index.php'>Início</a></li>
            <li><a href='minhaconta.php'>Minha conta</a></li>
            <li><a href='regras.php'>Regras do site</a></li>
            <li><a href='minhapublic.php'>Minhas publicações</a></li>
            <li><a href='minhapublicar2.php'>Publicar</a></li>
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
} else{
    $logado = $_SESSION['email'];
    
   echo "$logado 
  
   <li class='dropdown'>
   <div class='mega-menu'>
       <div class='container'>
         <div class='item'>     
 <li><a href='index.php'>Início</a></li>
         <li><a href='minhaconta.php'>Minha conta</a></li>
         <li><a href='regras.php'>Regras do site</a></li>
         <li><a href='minhapublic.php'>Minhas publicações</a></li>
         <li><a href='minhapublicar2.php'>Publicar</a></li>
         <li class = 'linamenu'>________________</li>
         <li><h5>CATEGORIAS<h5></li>
         <li><a href='#'>Arte</a></li>
         <li><a href='#'>Música</a></li>
         <li><a href='#'>Esportes</a></li>
         <li><a href='#'>Culinária</a></li>
         <li><a href='#'>Famosos</a></li>
         <li><a href='#'>Pets</a></li>
         <form action= 'sairconta.php'>
         <li><button name ='exit' id ='exit' type='submit'>Sair da conta</button></li>
         <div>
         </form>" ;
}

      ?>
    </ul>
  </div>
</div>

<li class='dropdown'>
<a href='#home'><i class="fa fa-angle-down"></i></a>
   


<div class="barra">
      <input type="text" class="o" name="busc" placeholder="Pesquisar">
      <input type="image" id="lupa" src="img/icons8-pesquisar-50.png" class ="lupa" />
      </ul>
</div>

</nav>