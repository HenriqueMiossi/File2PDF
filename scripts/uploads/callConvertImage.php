<?php
shell_exec('./magick convert *.png imagem.pdf');
shell_exec('./magick convert *.jpg imagem.pdf');
shell_exec('./magick convert *.jpeg imagem.pdf');

sleep(0.5);

header("location: imagem.pdf");
?>