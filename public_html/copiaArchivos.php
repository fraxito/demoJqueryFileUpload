<?php 

$nombreArchivo = $_POST['nombreArchivo'];
//copia los archivos de la carpeta temporal files a la carpeta definitiva imagenes
copy('server/ficheros/files/'.$nombreArchivo, 'imagenes/'.$nombreArchivo);
copy('server/ficheros/files/thumbnail/'.$nombreArchivo, 'imagenes/miniaturas/'.$nombreArchivo);

//borra los archivos de la carpeta temporal files
unlink('server/ficheros/files/'.$nombreArchivo);
unlink('server/ficheros/files/thumbnail/'.$nombreArchivo);

//mensaje final
echo '<h4>'.$nombreArchivo.' movido correctamente</h4>';