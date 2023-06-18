<?php 
    include_once('./../dompdf/autoload.inc.php');
    use Dompdf\Dompdf;
    include("./../../connect/bd.php"); #Conecta con la base de datos
    $academia = $_POST['academia'];
    $sql = "SELECT m.nombre AS materia, u.Nombre, u.APP FROM `materias_elegidas` me 
    JOIN `materia` m ON me.IDmat = m.IDMat JOIN `usuario` u ON me.IDprof = u.IDUser 
    WHERE m.academia = '$academia';";
    $resp = $mysqli->query($sql);
    $c = 0;
    $respX = [];
    if($resp){
        $resp->data_seek(0);
        while($fila = $resp->fetch_assoc()){
            $materias[] = $fila['materia'];
            $profe[] = $fila['Nombre'].' '.$fila['APP'];
            $c++;
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
            <h2>Materias de '.$academia.'</h2>
            <table>
            <thead>
                <tr>
                <th>Materia</th>
                <th>Profesor</th>
                </tr>
            </thead>
            <tbody>';
            for($i=0;$i<$c;$i++){
                $html .= '<tr>
                <td>'.$materias[$i].'</td>
                <td>'.$profe[$i].'</td>
                </tr>';
            }
            $html .= '</tbody>
                </table>
            </body>
            </html>';
    $dompdf -> loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $outfile = $dompdf->output();
    file_put_contents('./../../connect/pdfs/'.$academia.'.pdf', $outfile);
    $respAX["cod"] = 1;
    $respAX["msj"] = "Reporte generado correctamente";
    $respAX["icono"] = "success";
    $respAX["pathto"] = "./../connect/pdfs/$academia.pdf";
    }else{
        $respAX["cod"] = 0;
        $respAX["msj"] = "Ocurrio un error";
        $respAX["icono"] = "error";
    }
    echo json_encode($respAX);
?>