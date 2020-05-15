<?php
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
    echo "Arquivo não é uma imagem. ";
    $uploadOk = 0;
  }
}

// Checa se o arquivo já existe
if (file_exists($target_file)) {
  echo "Desculpe, o arquivo já existe. ";
  $uploadOk = 0;
}

// Permite certos tipos de arquivos
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Somente arquivos JPG, JPEG e PNG são permitidos. ";
  $uploadOk = 0;
}

// Checa se $uploadOk foi configurado como 0 por um erro
if ($uploadOk == 0) {
  echo "Desculpe, seu arquivo não foi enviado. ";
// Se tudo estiver OK, envia o arquivo
} else {
  if (move_uploaded_file($_FILES["inputFile"]["tmp_name"], $target_file)) {
    echo "O arquivo ". basename( $_FILES["inputFile"]["name"]). " foi enviado. ";
    header("location: ../convert.html");
  } else {
    echo "Desculpe, houve um erro ao enviar seu arquivo. ";
  }
}
?>