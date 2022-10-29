<?php
error_reporting(0);
 
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST['upload'])) {
 
    $imagem = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $imagem;
 
    $conexao = mysqli_connect("localhost", "root", "", "pubnow");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO publicacao (imagem) VALUES ('$imagem')";
 
    // Execute query
    mysqli_query($conexao, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>