<?php
    $conexion = mysqli_connect("localhost","root","KurapikaCarti","escom");
    if ($conexion->connect_error) {
        die("Error de conexión: " .$conexion->connect_error);
    }
    mysqli_query($conexion, "SET NAMES 'utf8'"); //Esta instrucción permite guardar eñes y acentos en la BD ;)
?>