<?php
//nos dira cuantas lineas hay escritas en el ficher y el nombre del fichero
$file = basename($_SERVER['PHP_SELF']); 
$no_of_lines = count(file($file)); 
echo "There are $no_of_lines lines in $file"."\n";
?>

