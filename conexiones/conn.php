<?php
     $server="localhost";
     $user="root";
     $pass=""; 
     $bd="data";

    $conexion = new mysqli($server,$user,$pass,$bd);
    if (!$conexion){
        die ('Error en conexion');
    }    

    echo "Conexion exitosa ";
?>