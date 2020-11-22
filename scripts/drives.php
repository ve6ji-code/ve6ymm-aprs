<?php
  header('Content-Type: text/plain');
  $output = shell_exec('/bin/df 2>&1');
  echo "<pre>".$output."</pre>";
?>
