<?php 
  include('./../connect/bd.php');
  $sql = "SELECT `IDUser` FROM `usuario` WHERE `Encuesta` != '2'";
  $resp = $mysqli->query($sql);
  $t = 0;
  if($resp){
    $resp->data_seek(0);
    while($fila = $resp->fetch_assoc()){
      $id[] = $fila['IDUser'];
      $t++;
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Modificar Datos</title>
  
  <link href="./css/responsividad_iia.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link href="./css/stickyFooter.css" rel="stylesheet">
  <link href="./css/libs/materialize.min.css" rel="stylesheet">
  <script src="./js/libs/jquery-3.6.4.min.js"></script>
  <script src="./js/libs/materialize.min.js"></script>
  <script src="./js/libs/justValidate.js"></script>
  <script src="./js/libs/sweetAlert.min.js"></script>
  <script src="./js/registro.js"></script>
  <meta name='viewport' content='width=device-width,initial-scale=1.0'/>
  <meta name="description" content="">
  <meta name="keywords" content="">
</head>
<body>
    <datalist id="ids_pos">
      <?php for($i=0;$i<$t;$i++): ?>
      <option value="<?= $id[$i] ?>"><?= $id[$i] ?></option>
      <?php endfor; ?>
    </datalist>
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
          <h2>Cambio de datos</h2>
          <p>En esta parte, puede cambiar los datos de los docentes que hayan sido registrados.</p>
        </div>
        <form id="formRegistro" autocomplete="on">
          <div class="row">
            <p>Ingrese el id del docente que desea modificar sus datos (OBLIGATORIO si es que quiere proceder).</p>
            <div class="col s12 m6 l3 input-field">
              <i class="fas fa-id-card-alt prefix"></i>
              <label for="Boleta">ID del docente</label>
              <input list="ids_pos" type="text" id="Boleta" name="Boleta del docente" autocomplete="cc-number">
            </div>
            <div class="col s12 m6 l3">
              <div class="btn blue" id="searchids">Buscar</div>
            </div>
          </div>
        </form>
        <form id="formRegistro-1" autocomplete="on">
          <div class="row">
            <p>En caso de que quiera modificar los datos, proporcione los nuevos datos en las casillas que desea cambiar.</p>
            <div class="col s12 m6 l3 input-field">
              <i class="fas fa-id-badge prefix"></i>
              <label for="Nombre">Nombre</label>
              <input type="text" id="Nombre" name="Nombre del docente" autocomplete="name">
            </div>
            <div class="col s12 m6 l3 input-field">
              <i class="fas fa-user-friends	prefix"></i>
              <label for="ApellidoPaterno">Apellido Paterno</label>
              <input type="text" id="ApellidoPaterno" name="ApellidoPaterno" autocomplete="cc-family-name">
            </div>
            <div class="col s12 m6 l3 input-field">
              <i class="fas fa-user-friends prefix"></i>
              <label for="ApellidoMaterno">Apellido Materno</label>
              <input type="text" id="ApellidoMaterno" name="ApellidoMaterno" autocomplete="cc-family-name">
            </div>
            <div class="row">
            <div class="col s12 m6 l4 input-field">
              <i class="fas fa-at prefix"></i>
              <label for="Correo">Correo</label>
              <input type="text" id="Correo" name="Correo Electronico" autocomplete="email">
            </div>
            <div class="col s12 m6 l4 input-field">
              <i class="fas fa-landmark prefix"></i>
              <label for="Departamento">Departamento del docente</label>
              <input type="text" id="Departamento" name="Departamento del docente">
            </div>
            <div class="row">
              <div class="col s12 m6 input-field">
                <button type="submit" class="btn blue" style="width:100%;">Cambiar datos</button>
              </div>
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
      <script src="./js/general.js"></script>
</body>
</html>