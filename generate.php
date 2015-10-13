<?php
	echo shell_exec("python algorithm.py " . escapeshellarg($_GET["input"]))
?>
