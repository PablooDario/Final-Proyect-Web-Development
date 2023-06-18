<?php 
    include('./../../connect/bd.php');
    include('./gestpost.php');
    session_start();
    $respAX = [];
    $i=0;
    if(isset($academia) && isset($plan) && isset($programa)){
        $sql = "SELECT * FROM `materia` WHERE `academia` = '$academia' AND `plan` = '$plan' AND `programa` = '$programa'";
        if($resp = $mysqli->query($sql)){
            $resp->data_seek(0);
            while($fila = $resp->fetch_assoc()){
                $respAX['id'][] = $fila['IDMat'];
                $respAX['name'][] = $fila['nombre'];
                $i++;
            }
        }
        $respAX['counter'][] = $i;
        echo json_encode($respAX);
    }else{
        $respAX['name'][0] = 'Ocurrio un problema';
        $respAX['id'][0] = 'non';
        $respAX['counter'][] = 0;
        echo json_encode($respAX);
    }
?>