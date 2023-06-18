<?php
    include("./../../connect/bd.php");
    $id = $_POST['id'];
    $sql = "SELECT * FROM `usuario` WHERE `IDUser` = '$id'";
    $resp = $mysqli->query($sql);
    $respAX = [];
    if($resp){
        $resp->data_seek(0);
        if($fila = $resp->fetch_assoc()){
            $respAX['name'] =$fila['Nombre'];
            $respAX['app'] = $fila['APP'];
            $respAX['apm'] = $fila['APM'];
            $respAX['correo'] = $fila['Correo'];
            $respAX['dpto'] = $fila['Depto'];
        }
        echo json_encode($respAX);
    }
?>