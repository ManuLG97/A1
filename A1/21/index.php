<?php
 echo php_uname()."\n";
echo PHP_OS."\n";
//Nos dira si el pc esta usando windows o no
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
echo 'This is a server using Windows!';
} else {
echo 'This is a server not using Windows!'."\n";
}
?>