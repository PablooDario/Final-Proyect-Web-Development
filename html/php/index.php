<?php 
    include("./../../connect/bd.php");
    include("./gestpost.php");
    $sessionTime = 60*60*24*14;
    session_set_cookie_params(time() + $sessionTime, "/", 'visualcmj.com', isset($_SERVER["HTTP"]), true);
    session_start();
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
            $_SESSION["auth"] = true;
            $_SESSION["path"] = $respAX["pathto"];
          }else{
            $respAX["cod"] = 0;
            $respAX["msj"] = "$correo - $pwd  ";
            $respAX["icono"] = "error";
            $respAX["pathto"] = "index";
          }
    }

    echo json_encode($respAX);
?>