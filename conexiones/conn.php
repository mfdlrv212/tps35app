<?php

     require ("constantes.php");

        $conexion = new mysqli ($server,$user,$pass,$bd);
        if (!$conexion){
            die ('Error en conexion'.mysqli_error());
        }        
    echo "Conexion exitosa";
    mysqli_close($conexion);
?>

