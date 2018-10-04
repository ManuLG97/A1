<?php
// Crear un archivo temporal en el temporal 
// directorio de archivos usando sys_get_temp_dir()
$temporal_file = tempnam(sys_get_temp_dir(), 'Tux');
echo $temporal_file."\n";
?>