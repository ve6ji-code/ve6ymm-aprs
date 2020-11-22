<?php
header('Content-Type: text/plain');
$output = shell_exec('/var/www/aprs.ve6ji.ca/scripts/unique_callsigns.py 2>&1');
echo "<pre>".$output."</pre>";
?>
