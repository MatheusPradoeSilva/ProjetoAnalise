<html>
    
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="trabalho_terceiro_bimestre\css\estilo_atualizar.css">

    </head>

    <?php
    include('menuadmin.php');

    include "conexao.php"; // Using database connection file here

    
    $id_user = $_GET['id_user']; // get id through query string

    $qry = mysqli_query($conexao,"select * from usuario where id_user='$id_user'"); // select query

    while($linha = mysqli_fetch_array( $qry)) {
            
        $nome = $linha['nome'];
        $email = $linha['email'];
        $senha = $linha['senha'];
        
    }

    if(isset($_POST['update'])) // when click on Update button
    {
        

        $nome =$_POST['nome'];
        $email =$_POST['email'];
        $senha =$_POST['senha'];
    
        $edit = mysqli_query($conexao,"update usuario set nome='$nome',
         email = '$email', senha = '$senha' where id_user='$id_user'");
        
        if($edit)
        {
            mysqli_close($conexao); // Close connection
            echo"dados atualizados com sucesso!"; // redirects to all records page
            header("Location: usuarios.php");
        }
        else
        {
            echo mysqli_error($conexao);
        }    	
    }
    ?>

    <?php

    include "conexao.php"; // Using database connection file here

    $id_user = $_GET['id_user']; // get id through query string

    $records = mysqli_query($conexao,"select * from usuario where id_user='$id_user'"); // select query

    while($dados = mysqli_fetch_array($records)){

    ?>   
    <body>


    <div class="container" style="margin-top: 1em;">
        <!-- Sign up form -->
        <form method="POST">
            <!-- Sign up card -->
            <div class="card person-card">
                <div class="card-body">
                    <!-- Sex image -->
                    <img style="text-align: center"; 
                        src="..\img\img_editar.png">
                    
                    <!-- First row (on medium screen) -->
                    
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6" style="padding: 0.5em;">
                    <div class="card">
                        <div class="card-body">
                        <h2 style="text-align: center"; id="who_message" > Alteração de dados</h2>
                            
                            <div class="form-group">
                                <label for="nome" class="col-form-label">Nome</label>
                                <input type="text" name="nome"  class="form-control" placeholder=" Nome" value= "<?php echo $dados['nome'];?>">
                            </div>


                            <div class="form-group">
                                <label for="email" class="col-form-label">E-mail:</label>
                                <input type="email" name="email"  class="form-control" placeholder=" E-mail" value= "<?php echo $dados['email'];?>" >
                            
                            </div>

                            
                        </div>
                    </div>
                </div>
                    
                <div class="col-md-6">
                    <div class="card"> 
                        <div class="card-body">
                            <h2 style="text-align: center"; >Alteração da senha</h2>

                            <div class="form-group">
                                <label for="password" class="col-form-label">Senha</label>
                                <input type="text" name="senha" id="password" class="form-control" placeholder=" Senha" value= "<?php echo $dados['senha'];?>" >
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 1em;">
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="update" value="Update">Alterar</button>
            </div>
            </form>

            <?php
            }
            ?>

        <script src="/trabalho_terceiro_bimestre\js\js_atualizar.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </body>
</html>