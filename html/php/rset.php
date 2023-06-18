<?php
 include("./../../connect/bd.php"); #Conecta con la base de datos
 include("./gestpost.php"); 
 session_start(); #Inicia la sesion
 $respAX = [];
 if(isset($_SESSION['user']) && isset($_SESSION['pos'])){
    $sql = "UPDATE `usuario` SET `reseteo` = true WHERE `IDUser` = '".$_SESSION['pos']."';";
    $resp = $mysqli->query($sql);
    if($resp){
    $respAX["cod"] = 1;
    $respAX["msj"] = "Se hizo tu peticion de reseteo en cuanto este lista podras volver a hacer la encuesta";
    $respAX["icono"] = "success";
    }else{
        $respAX["cod"] = 0;
        $respAX["msj"] = "Ocurrio un problema con la peticion";
        $respAX["icono"] = "error";
    }
 }else{
    $respAX["cod"] = 0;
    $respAX["msj"] = "Ocurrio un problema, intentalo despues";
    $respAX["icono"] = "error";
 }
 echo json_encode($respAX);
?>