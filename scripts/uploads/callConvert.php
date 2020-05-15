<?php
shell_exec('convert *.png imagem.pdf');
shell_exec('convert *.jpg imagem.pdf');
shell_exec('convert *.jpeg imagem.pdf');

sleep(0.5);

header("location: imagem.pdf");
?>