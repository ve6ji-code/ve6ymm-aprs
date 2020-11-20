<?php
header('Content-Type: text/plain');
$output = shell_exec('/usr/bin/free 2>&1');
echo "<pre>".$output."</pre>";
?>
