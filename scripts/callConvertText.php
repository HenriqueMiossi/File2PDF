<?php
shell_exec('./convertText.sh');

sleep(0.5);

header("location: uploads/final.pdf");
?>
