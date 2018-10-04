<?php
//le decimos lo que tendra que adivinar de la url
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  echo $full_url."\n";
?>
