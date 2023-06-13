<?php
    include("./connect.php");
    $sqlCheckLogin = "SELECT * FROM materia WHERE IDMat = 'WAD84'";
    $resCheckLogin = mysqli_query($conexion, $sqlCheckLogin);
    $numFilasRes = mysqli_num_rows($resCheckLogin);
    $resfila = mysqli_fetch_row($resCheckLogin);

    echo("<br> El numero de filas es ".$numFilasRes." y la materia resultante es ".$resfila[1])
?>