<?php
include('conexiones/conn.php');

if(!empty($_POST['documento']) && !empty($_POST['tipoDocumento']) && !empty($_POST['nombres']) && !empty($_POST['apellidos']) &&
!empty($_POST['correo']) && !empty($_POST['teléfono']) && !empty($_POST['pass']) && !empty($_POST['rol'])){


    $documento= $_POST['documento']; 
    $tipoDocumento= $_POST['tipoDocumento'];
    $nombres= $_POST['nombres'];
    $apellidos= $_POST['apellidos'];
    $correo= $_POST['correo'];
    $telefono= $_POST['teléfono'];
    $password= $_POST['pass']; 
    $pass= password_hash($password, PASSWORD_DEFAULT);
    $rol= $_POST['rol'];

     $agregarUsuarios="INSERT INTO form(id, documento, tipoDocumento, nombres, apellidos, correo, teléfono, pass, rol)
    VALUES (NULL,$documento, $tipoDocumento, '".$nombres."', '".$apellidos."', '".$correo."', $telefono, '".$password."', $rol)";
    $queryAgregar= mysqli_query($conexion, $agregarUsuarios);


    if($queryAgregar){
        echo "Usuario registrado exitosamente";
        echo "<br><br>";
        echo "<a href='agregarUsuarios.php'>Volver</a>";
    } else{
        echo "Error al registrar el usuario";
    }

} else{ 
    echo "LLENA LOS MALDITOS CAMPOS";
}

?>





