<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

echo "retry: 1000\n";
$time = date('r');
echo "data: The server time is: {$time}\n\n";
flush();  
        
      

?>
