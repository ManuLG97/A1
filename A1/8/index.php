<?php

$url = 'https://www.w3source.com/php-exercisis/php-exericises.php';
$url = parse_url($url);
echo 'Scheme : '.$url['scheme']."\n";
echo '<br>';
echo 'Host : '.$url['host']."\n";
echo '<br>';
echo 'Path : '.$url['path']."\n";
?>