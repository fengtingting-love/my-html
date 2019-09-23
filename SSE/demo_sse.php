<?php
//记住，要将Content-Type报头设置为“text/event-stream”，这样我们就可以发送事件流了。
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$time = date('r');
echo "data: The server time is: {$time}\n\n";
flush();
?>