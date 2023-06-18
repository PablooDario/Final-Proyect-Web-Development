<?php
    include_once('./../dompdf/autoload.inc.php');
    use Dompdf\Dompdf;
    session_start();
    if(isset($_SESSION['auth'])){
        $state = $_SESSION['auth'];
    }else{
        $state = 3;
    }
    if($state == 1 && isset($_SESSION['pos'])){
        include('./../../connect/bd.php');
        $c=$t=0;
        $sql = "SELECT * FROM `materia` WHERE `IDMat` IN (SELECT `IDmat`FROM `materias_elegidas` WHERE `IDprof` = '".$_SESSION['pos']."')";
        if($resp = $mysqli->query($sql)){
            $resp->data_seek(0);
            while($fila = $resp->fetch_assoc()){
                $materias[] = $fila['nombre'];
                $progr[] = $fila['programa'];
                $c++;
            }
        }
        $sql = "SELECT ae.Horas, a.descripcion FROM `act_elegidas` ae JOIN `actividad` a ON ae.IDact = a.IDact WHERE ae.IDprof = '".$_SESSION['pos']."';";
        if($resp = $mysqli->query($sql)){
            $resp->data_seek(0);
            while($fila = $resp->fetch_assoc()){
                $act[] = $fila['descripcion'];
                $hor[] = $fila['Horas'];
                $t++;
            }
        }
        $dompdf = new Dompdf();
        $imagePath = './../img/logoESCOMBlanco.png';
        $imageData = base64_encode(file_get_contents($imagePath));
        $html = '<!DOCTYPE html>
        <html>
        <head>
        <style>
        body{
            margin: 0;
            padding: 0;
        }
        .barra-superior {
            background-color: #122d86;
            height: 80px;
            padding: 0;
            margin: 0;
            
        }
        .imagen {
            width: 115px;
            height: 70px;
            padding: 5px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
            </style>
            <title>Comprobante</title>
        </head>
            <body>
                <div class="barra-superior">
                    <img src="data:image/jpeg;base64,'.$imageData.'" alt="Imagen" class="imagen">
                </div>
                <h2>Comprobante de '.$_SESSION['user'].'</h2>
                <h2>Materias seleccionadas</h2>
                <table>
                <thead>
                    <tr>
                    <th>Materia</th>
                    </tr>
                </thead>
                <tbody>';
        for($i=0;$i<$c;$i++){
            $html .= '<tr>
            <td>'.$materias[$i].' - '.$progr[$i].'</td>
            </tr>';
        }
        $html .= '</tbody>
                </table>
                <h2>Actividades seleccionadas</h2>
                <table>
                <thead>
                    <tr>
                    <th>Actividades</th>
                    </tr>
                </thead>
                <tbody>';
        for($i=0;$i<$t;$i++){
            $html .= '<tr>
            <td>'.$act[$i].'</td>
            </tr>';
        }
        $html .= '<td align="center"><b>Horas totales: '.$hor[0].'</b></td>
                    </tr>
                </tbody>
                </table>
            </body>
        </html>';
        $dompdf -> loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        header("Content-type: application/pdf");
        header("Content-Disposition: inline; filename=documento.pdf");
        $outfile = $dompdf->output();
        echo $outfile;
        file_put_contents('./../../connect/pdfs/'.$_SESSION['pos'].'.pdf', $outfile);
        exit(0);
    }else{
        if($state == 2) $whereto = 'admin';
        else if($state == 0) $whereto = 'subjects';
        else $whereto = '';
        header('Location: ./../'.$whereto);
    }
?>