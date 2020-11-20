<?php
header('Content-Type: text/plain');
$output = shell_exec('tac /var/log/aprx.log 2>&1');
echo "<pre>".$output."</pre>";
?>
