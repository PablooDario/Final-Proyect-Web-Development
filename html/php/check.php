<?php 
    session_start();
    $respAX = [];
    if(isset($_SESSION['auth'])){
        if($_SESSION['auth'] == 2){
            $respAX["cod"] = 1;
            $respAX["msj"] = "Bienvenido";
            $respAX["icono"] = "success";
            $respAX["pathto"] = '';
        }else{
            $respAX["cod"] = 0;
            $respAX["msj"] = "No tienes acceso a esta sección";
            $respAX["icono"] = "info";
            $respAX["pathto"] = "./index";
        }
    }else{
        $respAX["cod"] = 0;
        $respAX["msj"] = "Por favor inicia sesión";
        $respAX["icono"] = "warning";
        $respAX["pathto"] = "index";
    }
    echo json_encode($respAX);
?>