<?php 

if ($handle = opendir('imagenes/.')){
    while (false != ($entrada = readdir($handle))){
        if ($entrada != "." && $entrada != ".." && $entrada != "miniaturas"){
            echo '<img src="imagenes/'.$entrada.'" width="100px"> <br>';
            
        }
    }
    closedir($handle);
}