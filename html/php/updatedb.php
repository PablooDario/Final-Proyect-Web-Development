<?php
    include("./../../connect/bd.php");
    include('./gestpost.php');
    $respAX = [];
    $sql = "UPDATE `usuario` SET `Nombre` = '$name', `APP` = '$app', `APM` = '$apm', `Correo` = '$mail' 
    WHERE `IDUser` = '$id';";
    $resp = $mysqli->query($sql);
    if($resp){
        $respAX["cod"] = 1;
        $respAX["msj"] = "Se realizó con existo el cambio de datos";
        $respAX["icono"] = "success";
    }else{
        $respAX["cod"] = 0;
        $respAX["msj"] = "Ocurrio un problema con la peticion";
        $respAX["icono"] = "error";
    }
    echo json_encode($respAX);
?>