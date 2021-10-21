<?php
$ip = $_SERVER['REMOTE_ADDR'];
$file = "logg.txt"; 
$file = fopen($file, "a"); 
$timestamp = date('d/m/Y h:i:s');
$data = "<b>IP and TIMESTAMPS </b>: $ip, " : " ,$timestamp .<br>";
fwrite($file, $data); 
fclose($file);  
echo "IP and Timestamp <b>$ip,$timestamp</b> has been logged :D";
?> 