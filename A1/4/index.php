<!DOCTYPE html>
<html>
<head>
   <title>Ejercicio 4</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h3>Please input your name:</h3>
 <input type="text" name="nombre">
 <input type="submit" value="Submit Name">
 </form>
<?php
$nombre = $_POST['nombre'];
echo "<h3> Hello $nombre </h3>";
?>
</body>
</html>