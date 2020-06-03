<?php
shell_exec('./convertImage.sh');

sleep(0.5);

header("location: uploads/final.pdf");
?>
