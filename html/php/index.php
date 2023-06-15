<?php 
    include("./../../connect/bd.php"); #Conecta con la base de datos
    include("./gestpost.php"); 
    $sessionTime = 60*60*8; #Establece la duración de la session a 8 horas en caso de que el usuario no cierre su session
    session_set_cookie_params(time() + $sessionTime, "/", 'visualcmj.com', isset($_SERVER["HTTP"]), true); 
    session_start(); #Inicia la sesion
    $respAX = [];
    if(isset($_SESSION['user']) && isset($_SESSION['auth']) && isset($_SESSION['path'])){
        $respAX["cod"] = 1;
        $respAX["msj"] = "Hola! Bienvenido " .$_SESSION['user'];
        $respAX["icono"] = "success";
        $respAX["pathto"] = $_SESSION['path'];
    }else{
      $sql = "SELECT * FROM `usuario` WHERE `Correo` = '$correo' and `Pwd` = '$pwd'";
        $resp = mysqli_query($mysqli, $sql);
        $numFilasRes = mysqli_num_rows($resp);
        if($numFilasRes == 1){
            $infCheckLogin = mysqli_fetch_row($resp);
            if($infCheckLogin[7] == 0) $respAX["pathto"] = 'subjects';
            if($infCheckLogin[7] == 1) $respAX["pathto"] = 'home';
            if($infCheckLogin[7] == 2) $respAX["pathto"] = 'admin'; 
            $respAX["cod"] = 1;
            $respAX["msj"] = "Hola! Bienvenido $infCheckLogin[1] $infCheckLogin[2].";
            $respAX["icono"] = "success";
            $_SESSION["user"] = $infCheckLogin[1].' '.$infCheckLogin[2];
            $_SESSION["auth"] = $infCheckLogin[7];
            $_SESSION["path"] = $respAX["pathto"];
          }else{
            $respAX["cod"] = 0;
            $respAX["msj"] = "Ocurrio un error";
            $respAX["icono"] = "error";
            $respAX["pathto"] = "index";
          }
    }

    echo json_encode($respAX);
?>