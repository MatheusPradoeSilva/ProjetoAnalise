

<?php
include("conexao.php");
include("menu.php");
if (isset($_POST['publi'])) {

  $titulo = $_POST['titulo'];
  $descr = $_POST['descr'];
  $content = $_POST['mytextarea'];
  $id_user = $_SESSION['id_user'];
  $categ = $_POST['categ'];

  $name = $_FILES['file_name']['name'];
  $target_dir = "images/";
  $target_file = $target_dir . $name;

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg", "jpeg", "png", "gif");

  // Check extension
  if (in_array($imageFileType, $extensions_arr)) {
    // Upload file
    if (move_uploaded_file($_FILES['file_name']['tmp_name'], $target_dir . $name)) {
      // Convert to base64 
      $image_base64 = base64_encode(file_get_contents('images/' . $name));
      $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
      // Insert record
      $sql = "insert into publicacao(titulo, descricao, conteudo, id_user, categoria, Status, image ) 
        values('$titulo', '$descr', '$content', '$id_user', '$categ', 'NaoAceito', '$target_file' )";
      if (mysqli_query($conexao, $sql)) {

        header('Location: index.php');
      } else {
        echo mysqli_error($conexao);
      }
    }
  }
}
?>

