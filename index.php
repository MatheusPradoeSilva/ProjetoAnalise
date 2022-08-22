<?php
include("menu.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-store" />
<meta name="viewport" content="width-device-width">
<script src="script.js"></script>

</head>
<body>
    <div class = corpo>
    <h2>Compartilhe Conosco!</h2>
    Venha se juntar á nós e compartilhe já seus<br>
     artigos, ideais, receitas e muito mais.
     <br><br><br>
    Publique no botão abaixo e seja feliz!
    <br>
    <form action="minhapublic.php">
    <button class = "public" >Publicar</button>

    <!-- 1 carrosel -->
    <img class = "comput" src="img/mexendocomput.jpg">

    <hr>
</div>

    <!-- 2 carrosel -->

<section class="carousel-wrapper">
  <button type="button" class="arrows left-arrow arrow-inactive" aria-label="Arrow Left">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
      <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
      <path d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z" />
    </svg>
  </button>
  <section class="carousel" data-interval="10">
    <div class="carousel-item">
      <img src="https://picsum.photos/id/1/200/300" alt="Working">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/2/200/300" alt="Working">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/3/200/300" alt="Working">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/4/200/300" alt="Working">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/5/200/300" alt="Working">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/6/200/300" alt="Working">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/7/200/300" alt="Working">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/8/200/300" alt="Working">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/10/200/300" alt="Holidays">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/11/200/300" alt="Holidays">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/12/200/300" alt="Holidays">
    </div>
  </section>
  <button type="button" class="arrows right-arrow" aria-label="Arrow Right">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
      <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
      <path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" />
    </svg>
  </button>
</section>

</body>


</html>