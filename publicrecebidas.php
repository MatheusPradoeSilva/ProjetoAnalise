<!DOCTYPE html>
<html>

<head>
  <title>exibe usuários</title>



</head>

<body>

  <header>
    <?php

    include('menuadmin.php');

    ?>
  </header>
  <div class="container">
    <div class="row">
      <table class="table table-hover table-striped">

        <tbody>
          <?php




          include "conexao.php"; // Using database connection file here

          $records = mysqli_query($conexao, "select titulo, descricao, id_post from publicacao where Status = 'NaoAceito' "); // fetch data from database

          while ($row = mysqli_fetch_array($records)) {
          ?>
            <tr>

              <td> <?php echo "<h3>" . $row["titulo"] . "<br>"; ?> </td>
              <td> <?php echo "<h5>" . $row["descricao"] . "<br>"; ?> </td>
              <td>
                <a href="ver_publi_admin.php?id_post=<?php echo $row['id_post']; ?>">Ver Detalhes</a>
                
              </td>
            </tr>
          <?php
          }
          ?>


        </tbody>
      </table>
    </div>
  </div>



  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>