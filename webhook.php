<?php
## the following line opens a log file to put inbound posts
$fh = fopen("./log_sms.txt", "a");
if(false === $fh) exit("Error opening log file log_sms.txt\n");
$post = file_get_contents('php://input');
fwrite($fh, date('Y-m-d H:i:s').' '.$_SERVER['REQUEST_URI']."; POST: {$post}\n");
fclose($fh);
echo "OK\n";
Echo $post;
?>