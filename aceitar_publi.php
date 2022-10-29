<?php

        include_once('conexao.php');

        $id_post = $_GET['id_post'];
        $Status = $_POST['Status'];
       
          $sql=mysqli_query($conexao,"SELECT * from publicacao where id_post='$id_post'");

   
          while ($linha=mysqli_fetch_array($sql)){

            $Status = $linha['Status'];
    
          }
          if($Status=="NaoAceito"){
            
            $query=("UPDATE publicacao set Status='Aceito' where id_post='$id_post'");
            $result = mysqli_query($conexao,$query); 

            header('location:publicrecebidas.php');

          }else{

            echo $id_post;
          }

          ?>