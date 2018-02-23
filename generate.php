<?php
  $input = escapeshellarg(base64_decode( $_GET["input"]));
  echo shell_exec("python algorithm.py " . $input);
?>
