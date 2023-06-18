<?php 
    include("./../../connect/bd.php");
    session_start();
    $respAX = [];
    if(isset($_POST['login']) && $_POST['login'] == 1){ #Verifica si el usuario ha iniciado sesión y si lo ha hecho verifica si tiene acceso a la encuesta
        if(isset($_SESSION['auth'])){
            if($_SESSION['auth'] == 0){
                $respAX["cod"] = 1;
                $respAX["msj"] = "Bienvendio";
                $respAX["icono"] = "success";
                $respAX["pathto"] = "./";
            }else if($_SESSION['auth'] == 1){
                $respAX["cod"] = 0;
                $respAX["msj"] = "Ya contestaste esta encuesta";
                $respAX["icono"] = "info";
                $respAX["pathto"] = "pdf";
            }else{
                $respAX["cod"] = 0;
                $respAX["msj"] = "No puedes interactuar con este formulario";
                $respAX["icono"] = "info";
                $respAX["pathto"] = "./admin";
            }
        }else{
            $respAX["cod"] = 0;
            $respAX["msj"] = "Por favor inicia sesión";
            $respAX["icono"] = "warning";
            $respAX["pathto"] = "index";
        }
        echo json_encode($respAX);
    }
?>