<?php

include('db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['pass'];


$consulta = "SELECT* FROM datas where usuario = '$USUARIO' and pass = '$PASSWORD' ";
$resultado= mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:../index");
}else{
    include("index.php");
    ?>
 <center><h1>ERROR... LOS DATOS INGRESADOS SON INCORRECTOS!! </h1></center>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);



?>