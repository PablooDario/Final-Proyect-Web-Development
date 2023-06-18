<?php 
  include('./../connect/bd.php');
  $t=0;
  $sql = "SELECT `academia` FROM `materia` group by `academia`";
  if($resp = $mysqli->query($sql)){
    $resp->data_seek(0);
    while($fila = $resp->fetch_assoc()){
      $aca[] = $fila['academia'];
      $t++;
    }
    $resp->free();  
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Generar PDF</title>
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
<body>
  <div style="position: relative; left: 0; top: 0; background-color: #122d86; width: 100%; height: 10vh;">
    <span></span>
    <div class="col s12 m6 input-field" style="width: 30%;">
      <a href="./admin" class="btn blue" style="width:100%;">
        Volver
      </a>
    </div>
  </div>
  <main class="valign-wrapper">
    <div class="container">
      <div class="row">
        <h2>Generar PDFs</h2>
        <p>Aqui puedes generar un pdf con la informacion resumida de las academia, si se genera en blanco es que no ha sido elegida ninguna materia</p>
    </div>      
    <div class="row">
        <div class="col s7 m7 l7">
          <h6>Escoja la academia que quiere generar el reporte</ h6>
        </div>
      </div>
      <div class="row">
            <div class="col s7 m7 l7">
              <select id="academia" name="academia">
                <option value="" disabled selected class="disabledselect">Academia</option>
                <?php for($i=0;$i<$t;$i++): ?>
                <option value="<?= $aca[$i] ?>"><?= $aca[$i] ?></option>
                <?php endfor; ?> 
              </select>
            </div>
            <div class="col s4 m4 l4">
              <button class="btn red" id="generatereport" style="width: 100%;">Generar</button>
            </div>
          </div>
  </div>
</main>
<footer class="page-footer blue">
  <div class="footer-copyright">
    <div class="container">
    © 2023 Copyright
    <a class="grey-text text-lighten-4 right" href="https://www.escom.ipn.mx">ESCOM-IPN</a>
    </div>
  </div>
  </footer>
  <script src="./js/general.js"></script>
  <script src="./js/genaca.js"></script>
</body>
</html>