<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-store" />
<meta name="viewpoet" content="width-device-width">
    <link rel="stylesheet" type="text/css" href="cssanalise.css" />

  <title>Minha conta</title>



</head>

<body>

  <header>
    <?php

    include_once('menu.php');

    ?>
  </header>
  <div class="container">
    <div class="row">
      <table class="table table-hover table-striped">
      <thead class="thead_table" >
                            <tr>
                            <th class="th_table" scope="col"><b>Nome</b></th>
                            <th class="th_table" scope="col"><b>Senha</th>
                            <th  class="th_table" scope="col"><b>E-mail</b></th>
                            <th  style=" text-align: center;"  width="18%" scope="col"><b>Ação</b></th>
                            </tr>
                        </thead>
        <tbody>
          <?php 


          include('conexao.php'); // Using database connection file here

          $id_user = $_SESSION['id_user'];

          $record = mysqli_query($conexao, "SELECT * from usuario WHERE id_user = '$id_user'"); // fetch data from database
          
          while ($row = mysqli_fetch_array($record)) {
          ?>
            <tr>

              
              <td> <?php echo "<h5>" . $row["nome"] . "<br>"; ?> </td>
              <td> <?php echo "<h5>" . $row["senha"] . "<br>"; ?> </td>
              <td> <?php echo "<h5>" . $row["email"] . "<br>"; ?> </td>

              <td>
                <a href="editar_user.php?id_user=<?php echo $row['id_user']; ?>">Editar </a>
                <a href="deletar_user.php?id_user=<?php echo $row['id_user']; ?>" onclick="return confirm('Tem certeza que deseja deletar este usuário?')">
       Deletar</a>
                
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