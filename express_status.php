<p>
<b>WAX Expresstrade Status</b>
<?php
$host = 'trade.opskins.com';
if($socket =@ fsockopen($host, 443, $errno, $errstr, 30)) {
echo '<img src="/img/online.png" width="11" height="11" />';
fclose($socket);
} else {
echo '<img src="/img/offline.png" width="11" height="11" />';
}
?>


</p>
