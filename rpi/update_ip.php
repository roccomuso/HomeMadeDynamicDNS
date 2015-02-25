<?php
date_default_timezone_set('Europe/Rome');

$file = "ip.txt";

$text = $_SERVER['REMOTE_ADDR']." ".date("d-m-Y H:i:s");

file_put_contents($file, $text);

echo "IP Aggiornato!";

?>