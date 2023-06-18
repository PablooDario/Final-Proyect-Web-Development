<?php 
    include("./../../connect/bd.php"); #Conecta con la base de datos
    $id = $_POST['id'];
    $sql = "UPDATE `usuario` SET `Encuesta` = '0', `reseteo` = '0' WHERE `IDUser` = '$id';";
    $resp1 = $mysqli->query($sql);
    $sql = "DELETE FROM `materias_elegidas` WHERE `IDprof` = '$id';";
    $resp2 = $mysqli->query($sql);
    $sql = "DELETE FROM `act_elegidas` WHERE `IDprof` = '$id';";
    $resp3 = $mysqli->query($sql);
    $respX = [];
    if($resp1 && $resp2 && $resp3){
        $respAX["cod"] = 1;
        $respAX["msj"] = "Se ha reseteado correctamente la encuesta";
        $respAX["icono"] = "success";
    }else{
        $respAX["cod"] = 0;
        $respAX["msj"] = "Ocurrio un error";
        $respAX["icono"] = "error";
    }
    echo json_encode($respAX);
?>