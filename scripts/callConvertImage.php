<?php
shell_exec('./convert.sh');

sleep(0.5);

header("location: uploads/final.pdf");
?>