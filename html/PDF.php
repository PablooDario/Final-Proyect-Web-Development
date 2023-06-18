<?php 
  session_start();
  if(isset($_SESSION['auth'])){
    if($_SESSION['auth'] == 1){
      1;
      $file = $_SESSION['pos'];
    }else{
      if($_SESSION['auth'] == 0)
        header('Location: subjects');
      else header('Location: admin');
    }
  }else{
    header('Location: ./');
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Visualizar</title>
  <link href="./css/responsividad_iia.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link href="./css/stickyFooter.css" rel="stylesheet">
  <link href="./css/libs/materialize.min.css" rel="stylesheet">
  <script src="./js/libs/jquery-3.6.4.min.js"></script>
  <script src="./js/libs/materialize.min.js"></script>
  <script src="./js/libs/justValidate.js"></script>
  <script src="./js/libs/sweetAlert.min.js"></script>
  <script src="./js/pdf.js"></script>
  <meta name='viewport' content='width=device-width,initial-scale=1.0'/>
  <meta name="description" content="">
  <meta name="keywords" content="">
</head>

<body>
    <div style="position: relative; left: 0; top: 0; background-color: #122d86; width: 100%; height: 10vh;">
        <span></span>
    </div>
    <main class="valign-wrapper">
        <div class="container">
          <div class="row">
            <h2>Ver PDF</h2>
            <p>Aqui puedes descargar el PDF con la informacion que otorgaste en tu rellenado de la encuesta de materias y actividades. En caso de que quieras hacer un cambio, debes solicitar un reseteo de encuesta para que puedas llenarla de nuevo</p>
          </div>     
    <div class="row">
        <div class="col s12 m6 input-field">
          <a href="./../connect/pdfs/<?= $fileto ?>.pdf" download="Comprobante.pdf" class="btn blue" style="width:100%;">
          Descarga PDF
          </a>
        </div>
        <div class="col s12 m6 input-field">
          <div class="btn blue" style="width:100%;" id="reset">Resetear Encuesta</div>
        </div>
        <div class="col s12 m12 input-field">
          <a href="./php/close_session" class="btn red" style="width:100%;">
            Cerrar sesión
          </a>
        </div>
      </div>
    </form>
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
</body>
</html>