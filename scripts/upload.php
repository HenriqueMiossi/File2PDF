<?php
shell_exec('./remove.sh');

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["inputFile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Permite certos tipos de arquivos
$allowed_types = array('jpg', 'png', 'jpeg');
$extension = pathinfo($target_file, PATHINFO_EXTENSION);

if (in_array($extension, $allowed_types, false) != true) {

	$uploadOk = 2;

	$allowed_types = array('txt');

	if (in_array($extension, $allowed_types, false) != true) {
		$uploadOk = 0;
	}
}

// Checa se $uploadOk foi configurado como 0 por um erro
if ($uploadOk == 0) {
    header("location: ../error.html");
// Se tudo estiver OK, envia o arquivo
} elseif ($uploadOk == 2) {

	if (move_uploaded_file($_FILES["inputFile"]["tmp_name"], $target_file)) {
        header("location: ../convertText.html");
    } else {
        header("location: ../error.html");
    }

} else {
    if (move_uploaded_file($_FILES["inputFile"]["tmp_name"], $target_file)) {
        header("location: ../convert.html");
    } else {
        header("location: ../error.html");
    }
}
?>
