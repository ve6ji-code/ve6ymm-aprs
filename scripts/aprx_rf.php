<?php
  header('Content-Type: text/plain');
  $output = shell_exec('tail -n 2000 /var/log/aprx-rf.log 2>&1');
  echo "<pre>".$output."</pre>";
?>
