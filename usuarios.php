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
      <thead class="thead_table" >
                            <tr>
                            <th  class="th_table"  scope="col"><b>ID</b></th>
                            <th class="th_table" scope="col"><b>Nome</b></th>
                            <th class="th_table" scope="col"><b>Senha</th>
                            <th  class="th_table" scope="col"><b>E-mail</b></th>
                            <th  style=" text-align: center;"  width="18%" scope="col"><b>Ação</b></th>
                            </tr>
                        </thead>
        <tbody>
          <?php




          include "conexao.php"; // Using database connection file here

          $records = mysqli_query($conexao, "select * from usuario"); // fetch data from database

          while ($row = mysqli_fetch_array($records)) {
          ?>
            <tr>

              <td> <?php echo "<h5>" . $row["id_user"] . "<br>"; ?> </td>
              <td> <?php echo "<h5>" . $row["nome"] . "<br>"; ?> </td>
              <td> <?php echo "<h5>" . $row["senha"] . "<br>"; ?> </td>
              <td> <?php echo "<h5>" . $row["email"] . "<br>"; ?> </td>

              <td>
                <a href="editar_user_admin.php?id_user=<?php echo $row['id_user']; ?>">Editar </a>
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