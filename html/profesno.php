<?php 
  include('./../connect/bd.php');
  $c = 0;
  $sql = "SELECT * FROM `usuario` WHERE `Encuesta` = 0";
  $resp = $mysqli->query($sql);
  $resp->data_seek(0);
  while($fila = $resp->fetch_assoc()){
    $id[] = $fila['IDUser'];
    $nombre[] = $fila['Nombre'];
    $ap[] = $fila['APP'];
    $correo[] = $fila['Correo'];
    $depto[] = $fila['Depto'];
    $c++;
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Profesores que no contestaron la encuesta</title>
  <link href="./css/responsividad_iia.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link href="./css/stickyFooter.css" rel="stylesheet">
  <link href="./css/libs/materialize.min.css" rel="stylesheet">
  <script src="./js/libs/jquery-3.6.4.min.js"></script>
  <script src="./js/libs/materialize.min.js"></script>
  <script src="./js/libs/justValidate.js"></script>
  <script src="./js/libs/sweetAlert.min.js"></script>
  <meta name='viewport' content='width=device-width,initial-scale=1.0'/>
  <meta name="description" content="">
  <meta name="keywords" content="">
</head>

<style>
    .content-table{
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        min-width: 400px;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15)
    }

    .content-table thead tr{
        background-color: #0937b5;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
    }

    .content-table th,
    .content-table td {
        padding: 12px 15px;
    }

    .content-table tbody tf{
        border-bottom: 1px solid #0937b5;
    }

    .content-table tbody tr:nth-of-type(even){
        background-color: #d8fcf8;
    }

    .content-table tbody tr:last-of-type{
        border-bottom: 2px solid #0937b5;
    }

   
</style>

<body>
  <div style="position: relative; left: 0; top: 0; background-color: #122d86; width: 100%; height: 10vh;">
    <span></span>
    <div class="col s12 m6 input-field" style="width: 30%;">
      <a href="./admin" class="btn blue" style="width:100%;">
        Volver
      </a>
    </div>
  </div>
  <h1 style="font-size:60px; background-color:powderblue; text-align:center; border:2px solid #0756ff;">Profesores que no contestaron la encuesta</h1>
  <table class="content-table">
    <thead>
      <tr>
        <th>Profesor</th>
        <th>Academia</th>
        <th>Correo</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0;$i<$c;$i++): ?>
      <tr>
        <td><?= $id[$i] ?> - <?= $nombre[$i] ?> <?= $ap[$i] ?></td>
        <td><?= $depto[$i] ?></td>
        <td><?= $correo[$i] ?></td>
      </tr>
      <?php endfor; ?>
    </tbody> 
  </table>
  <footer class="page-footer blue" style="position: fixed; bottom: 0; width: 100%;">
    <div class="footer-copyright">
      <div class="container">
      © 2023 Copyright
      <a class="grey-text text-lighten-4 right" href="https://www.escom.ipn.mx">ESCOM-IPN</a>
      </div>
    </div>
  </footer>
  <script src="./js/general.js"></script>
</body>
</html>