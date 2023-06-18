<?php 
    include("./../../connect/bd.php"); #Conecta con la base de datos
    $materias = $_POST['materias'];
    $actividad = $_POST['actividad'];
    $canact = $_POST['canact'];
    $canmat = $_POST['canmat'];
    $sumhour = $_POST['sumhour'];
    session_start(); #Inicia la sesion
    $respAX = [];
    $id = $_SESSION['pos'];
    if(isset($_SESSION['user']) && isset($_SESSION['auth']) && isset($_SESSION['path'])){
	    $er = $sql = "INSERT INTO `materias_elegidas` (`IDprof`, `IDmat`) VALUES ";
        for($i=0;$i<$canmat;$i++){
            if($i==($canmat-1)){
                $sql .= "('$id', '$materias[$i]');";
            }else{
                $sql .= "('$id', '$materias[$i]'), ";	
            }
        }
        $resp1 = $mysqli->query($sql);
        $sql = "INSERT INTO `act_elegidas` (`IDprof`, `IDact`, `Horas`) VALUES ";
        for($i=0;$i<$canact;$i++){
            if($i==($canact-1)){
                $sql .= "('$id', '$actividad[$i]','$sumhour');";
            }else{
                $sql .= "('$id', '$actividad[$i]', '$sumhour'), ";	
            }
        }
        $resp2 = $mysqli->query($sql);
        if($resp1 && $resp2){
            $sql = "UPDATE `usuario` SET `Encuesta` = '1' WHERE `usuario`.`IDUser` = '$id';";
            $_SESSION['auth'] = 1;
            $mysqli->query($sql);
            $respAX["cod"] = 1;
            $respAX["msj"] = "Registro hecho correctamente a continuación se mostrara tu pdf para descargar";
            $respAX["icono"] = "success";
            $respAX["pathto"] = "./php/genpdf";
          }else{
            $respAX["cod"] = 0;
            $respAX["msj"] = "$er";
            $respAX["icono"] = "error";
            $respAX["pathto"] = "./";
          }
    }

    echo json_encode($respAX);
?>