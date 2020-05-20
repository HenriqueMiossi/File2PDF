<?php
shell_exec('./remove.sh');

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["inputFile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Checa se a imagem é real ou não
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["inputFile"]["tmp_name"]);
  if($check !== false) {
    echo "Arquivo é uma imagem - " . $check["mime"] . ". ";
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
    header("location: ../error.html");
  }
}

// Permite certos tipos de arquivos
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  $uploadOk = 0;
  header("location: ../error.html");
}

// Checa se $uploadOk foi configurado como 0 por um erro
if ($uploadOk == 0) {
  header("location: ../error.html");
// Se tudo estiver OK, envia o arquivo
} else {
  if (move_uploaded_file($_FILES["inputFile"]["tmp_name"], $target_file)) {
    echo "O arquivo ". basename( $_FILES["inputFile"]["name"]). " foi enviado. ";
    header("location: ../convert.html");
  } else {
    header("location: ../error.html");
  }
}
?>