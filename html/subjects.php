<?php
  include("./../connect/bd.php");
  $i = 0; $t = 0; $h=0;
  $sql = "SELECT * FROM `materia`";
  if($resp = $mysqli->query($sql)){
    $resp->data_seek(0);
    while($fila = $resp->fetch_assoc()){
      $id[] = $fila['IDMat'];
      $name[] = $fila['nombre'];
      $pro[] = $fila['programa'];
      $plan[] = $fila['plan'];
      $i++;
    }
    $resp->free();
  }

  $sql = "SELECT `academia` FROM `materia` group by `academia`";
  if($resp = $mysqli->query($sql)){
    $resp->data_seek(0);
    while($fila = $resp->fetch_assoc()){
      $aca[] = $fila['academia'];
      $t++;
    }
    $resp->free();  
  }

  $sql = "SELECT * FROM `actividad`";
  if($resp = $mysqli->query($sql)){
    $resp->data_seek(0);
    while($fila = $resp->fetch_assoc()){
      $idact[] = $fila['IDact'];
      $descri[] =$fila['descripcion'];
      $h++;
    }
    $resp->free();  
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Materias</title>
  <link rel="stylesheet" href="./css/libs/materialize.min.css">
  <link rel="stylesheet" href="./css/libs/materialize.css">
  <link rel="stylesheet" href="./css/subjects.css">
</head>
<body>
  <header class="headeer">
    <div class="row">
      <div class="col s4 m4 l4">
          <img src="./img/TBs_4.png" alt="LogoESCOM" width="300px" height="140px">
      </div>
      <div class="col s4 m4 l4 escm" style="text-align: right;">
        <div class="ESCOM" style="position: relative; right: 105px;">
          <h3>ESCOM</h3>
        </div>
        <h5 class="ESCOM">"La Técnica al Servicio de la Patria"</h5>
      </div>
      <div class="s4 m4 l4 logoESCOM" style="float: right;">
        <img src="./img/logoESCOMBlanco.png" alt="" width="200px" height="135px">
      </div>
    </div>
  </header>
  <main>
    <form id="formMaterias" autocomplete="off">
      <div id="materias">
        <div class="container expMat">
          <div class="row explicacion">
            <h3>Registro de materias</h3>
            <p>Porfavor elija las materias que quiera impartir el próximo semestre. Seleccione en este orden las características de la materia que desea:</p>
            <ol>
              <li>Carrera donde se imparte</li>
              <li>Plan en que se ingresó la materia</li>
              <li>Departamento en que se encuentra la materia</li>
              <li>Materia</li>
            </ol>
            <p style="font-weight: 700;">¡Por favor! Elija las materias en orden, ya que de no ser así podría haber inconsistencias a la hora de finalizar</p>
          </div>
        </div>
        <div class="container registroMat">
          <!---------------------------------Primera fila-------------------->
          <div class="row">
            <div class="col s12 m1 l1 input-field">
              <h5>1</h5>
            </div>
            <!--En carrera dejar asi el select-option-->
            <div class="col s12 m2 l2 input-field">
              <select id="carrera1" name="carrera1">
                <option value="" disabled selected class="disabledselect">Carrera</option>
                <option value="ISC">ISC</option>
                <option value="LCD">LCD</option>
                <option value="IIA">IIA</option>
              </select>
            </div>
            <!--Desplegar las opciones según la selección que hizo en plan, para ISC desplegar el plan 2009 y 2020, para LCD e IIA desplegar solo 2020, solo deje 2020 como prueba-->
            <div class="col s12 m2 l2 input-field">
              <select id="plan1" name="plan1">
                <option value="" disabled selected class="disabledselect">Plan</option>
                <option value="2020">2020</option>
                <option value="2009">2009</option>
              </select>
            </div>
            <!--Desplegar las opciones de departamento según la carrera que eligio y el plan (hacer una consulta sql  de ahí desplegar las opciones?? )  solo deje Básicas como prueba-->
            <div class="col s12 m3 l3 input-field">
              <select id="departamento1" name="departamento1">
                <option value="" disabled selected class="disabledselect">Departamento</option>
                <?php for($i=0;$i<$t;$i++): ?>
                <option value="<?= $aca[$i] ?>"><?= $aca[$i] ?></option>
                <?php endfor;?>
              </select>
            </div>
            <!--Desplegar las opciones según la carrera, plan y departamento que eligió, solo deje Algebra lineal como prueba-->
            <div class="col s12 m4 l4 input-field">
              <select id="materia1" name="materia1">
                <option value="" disabled selected class="disabledselect">Materia</option>
              </select>
            </div>
          </div>
          <!--Hacer lo mismo para las siguientes 3 materias y 2 materias extra-->
          <!---------------------------------Segunda fila-------------------->
          <div class="row">
            <div class="col s12 m1 l1 input-field">
              <h5>2</h5>
            </div>
            <div class="col s12 m2 l2 input-field">
              <select id="carrera2" name="carrera2">
                <option value="" disabled selected class="disabledselect">Carrera</option>
                <option value="ISC">ISC</option>
                <option value="LCD">LCD</option>
                <option value="IIA">IIA</option>
              </select>
            </div>

            <div class="col s12 m2 l2 input-field">
              <select id="plan2" name="plan2">
                <option value="" disabled selected class="disabledselect">Plan</option>
                <option value="2020">2020</option>
                <option value="2009">2009</option>
              </select>
            </div>
    
            <div class="col s12 m3 l3 input-field">
              <select id="departamento2" name="departamento2">
                <option value="" disabled selected class="disabledselect">Departamento</option>
                <?php for($i=0;$i<$t;$i++): ?>
                <option value="<?= $aca[$i] ?>"><?= $aca[$i] ?></option>
                <?php endfor;?>
              </select>
            </div>
    
            <div class="col s12 m4 l4 input-field">
              <select id="materia2" name="materia2">
                <option value="" disabled selected class="disabledselect">Materia</option>
              </select>
            </div>
          </div>
          <!---------------------------------Tercera fila-------------------->
          <div class="row">
            <div class="col s12 m1 l1 input-field"><h5>3</h5></div>
            <div class="col s12 m2 l2 input-field">
              <select id="carrera3" name="carrera3">
                <option value="" disabled selected class="disabledselect">Carrera</option>
                <option value="ISC">ISC</option>
                <option value="LCD">LCD</option>
                <option value="IIA">IIA</option>
              </select>
            </div>
        
            <div class="col s12 m2 l2 input-field">
              <select id="plan3" name="plan3">
                <option value="" disabled selected class="disabledselect">Plan</option>
                <option value="2020">2020</option>
                <option value="2009">2009</option>
              </select>
            </div>
      
            <div class="col s12 m3 l3 input-field">
              <select id="departamento3" name="departamento3">
                <option value="" disabled selected class="disabledselect">Departamento</option>
                <?php for($i=0;$i<$t;$i++): ?>
                <option value="<?= $aca[$i] ?>"><?= $aca[$i] ?></option>
                <?php endfor;?>
              </select>
            </div>
        
            <div class="col s12 m4 l4 input-field">
              <select id="materia3" name="materia3">
                <option value="" disabled selected class="disabledselect">Materia</option>
              </select>
            </div>
          </div>
          <!---------------------------------Cuarta fila-------------------->
          <div class="row">
            <div class="col s12 m1 l1 input-field">
              <h5>4</h5>
            </div>
            <div class="col s12 m2 l2 input-field">
              <select id="carrera4" name="carrera4">
                <option value="" disabled selected class="disabledselect">Carrera</option>
                <option value="ISC">ISC</option>
                <option value="LCD">LCD</option>
                <option value="IIA">IIA</option>
              </select>
            </div>
      
            <div class="col s12 m2 l2 input-field">
              <select id="plan4" name="plan4">
                <option value="" disabled selected class="disabledselect">Plan</option>
                <option value="2020">2020</option>
                <option value="2009">2009</option>
              </select>
            </div>
      
            <div class="col s12 m3 l3 input-field">
              <select id="departamento4" name="departamento4">
                <option value="" disabled selected class="disabledselect">Departamento</option>
                <?php for($i=0;$i<$t;$i++): ?>
                <option value="<?= $aca[$i] ?>"><?= $aca[$i] ?></option>
                <?php endfor;?>
              </select>
            </div>
        
            <div class="col s12 m4 l4 input-field">
              <select id="materia4" name="materia4">
                <option value="" disabled selected class="disabledselect">Materia</option>
              </select>
            </div>
          </div>

          <div class="MaxM">
            <label>
              <input type="checkbox" id="MaxMaterias">
              <span>¿Deseas dar el maximo de clases?</span>
            </label>
          </div>
        </div>
        <div class="container extras">
          <!-----------------Materia extra 1--------------->
          <div class="row">
            <div class="col s12 m1 l1">
              <h5>Extra1</h5>
            </div>
            <div class="col s12 m2 l2 input-field">
              <select id="carreraE1" name="carreraE1">
                <option value="" disabled selected class="disabledselect">Carrera</option>
                <option value="ISC">ISC</option>
                <option value="LCD">LCD</option>
                <option value="IIA">IIA</option>
              </select>
            </div>
    
            <div class="col s12 m2 l2 input-field">
              <select id="planE1" name="planE1">
                <option value="" disabled selected class="disabledselect">Plan</option>
                <option value="2020">2020</option>
                <option value="2009">2009</option>
              </select>
            </div>
      
            <div class="col s12 m3 l3 input-field">
              <select id="departamentoE1" name="departamentoE1">
                <option value="" disabled selected class="disabledselect">Departamento</option>
                <?php for($i=0;$i<$t;$i++): ?>
                <option value="<?= $aca[$i] ?>"><?= $aca[$i] ?></option>
                <?php endfor;?>
              </select>
            </div>
      
            <div class="col s12 m4 l4 input-field">
              <select id="materiaE1" name="materiaE1">
                <option value="" disabled selected class="disabledselect">Materia</option>
              </select>
            </div>
          </div>
          <!---------------------------------Materia extra 2-------------------->
          <div class="row">
            <div class="col s12 m1 l1">
              <h5>Extra2</h5>
            </div>
            <div class="col s12 m2 l2 input-field">
              <select id="carreraE2" name="carreraE2">
                <option value="" disabled selected class="disabledselect">Carrera</option>
                <option value="ISC">ISC</option>
                <option value="LCD">LCD</option>
                <option value="IIA">IIA</option>
              </select>
            </div>
      
            <div class="col s12 m2 l2 input-field">
              <select id="planE2" name="planE2">
                <option value="" disabled selected class="disabledselect">Plan</option>
                <option value="2020">2020</option>
                <option value="2009">2009</option>
              </select>
            </div>
        
            <div class="col s12 m3 l3 input-field">
              <select id="departamentoE2" name="departamentoE2">
                <option value="" disabled selected class="disabledselect">Departamento</option>
                <?php for($i=0;$i<$t;$i++): ?>
                <option value="<?= $aca[$i] ?>"><?= $aca[$i] ?></option>
                <?php endfor;?>
              </select>
            </div>
        
            <div class="col s12 m4 l4 input-field">
              <select id="materiaE2" name="materiaE2">
                <option value="" disabled selected class="disabledselect">Materia</option>
              </select>
            </div>
          </div>
        </div>
        <!-----------------Boton1--------------->
        <div class="container btn1">
          <div class="row">
            <div class="col s12 m12 l12 btn" id="continue" style="width: 90%; background-color: #122d86;">
              Continuar con las Actividades
            </div>
          </div>
        </div>
        
      </div>

      <!-----------------ACTIVIDADES------------------>
      <div id="actividades">
        <div class="container expAct">
          <div class="row explicacion2">
            <h3 style="text-align: left;">Registro de Actividades</h3>
            <p>Porfavor elija las actividades que quiera ejercer durante el próximo semestre. Las primeras dos casillas no lo dejarán elegir, ya que ese par de actividades son Obligatorias; donde puede elegir es en las siguientes 3 casillas; una vez que haya elegido las actividades que desee, asigne cuantas horas le dedicará semanalmente, este suma no debe pasar de 22 horas.
            </p>
            <p>Si no desea elegir más actividades que las primeras 2 obligatirias, seleccione las horas que le dedicara a esas dos actividades individualmente y después de click en Finalizar Registros</p>
          </div>
        </div>
        <div class="container explAct">
          <div class="row">
            <div class="col s1 m1 l1"><H5>No.</H5></div>
            <div class="col s7 m7 l7"><h5 style="text-align: center;">ACTIVIDAD</h5></div>
            <div class="col s4 m4 l4"><h5 style="text-align: center;">HORAS</h5></div>
          </div>
        </div>
        <div class="container registroAct">
          <!--Ignorar las primeras 2 actividades esas se quedan obligatoriamente-->
          <!-----Actividad 1-->
          <div class="row">
            <div class="col s1 m1 l1"><h5>1</h5></div>
            <div class="col s7 m7 l7">
              <input type="text" value="PREPARACIÓN DE CLASES" placeholder="PREPARACIÓN DE CLASES" id="actividad1" name="actividad1" disabled>
            </div>
            <div class="col s4 m4 l4">
              <input type="number" id="horas1" name="horas1" placeholder="0" min="1" value="0">
            </div>
          </div>
          <!-----Actividad 2-->
          <div class="row">
            <div class="col s1 m1 l1"><h5>2</h5></div>
            <div class="col s7 m7 l7">
              <input type="text" value="ATENCIÓN A ALUMNOS" placeholder="ATENCIÓN A ALUMNOS" id="actividad2" name="actividad2" disabled>
            </div>
            <div class="col s4 m4 l4">
              <input type="number" id="horas2" name="horas2" placeholder="0" min="1" value="0">
            </div>
          </div>
          <!-----Actividad 3-->
          <!--En la actividad 3,4 y 5 desplegar todas las actividades que vienen en la tabla activivdad de la base de datos, el value puede ser id de la actividad para un mejor control-->
          <div class="row">
            <div class="col s1 m1 l1"><h5>3</h5></div>
            <div class="col s7 m7 l7">
              <select id="actividad3" name="actividad3">
                <option value="" disabled selected class="disabledselect">Actividad</option>
                <?php for($i=0;$i<$h;$i++): ?>
                <option value="<?= $idact[$i] ?>"><?= $descri[$i] ?></option>
                <?php endfor;?>
              </select>
            </div>
            <div class="col s4 m4 l4">
              <input type="number" id="horas3" name="horas3" placeholder="0" min="1" value="0">
            </div>
          </div>
          <!-----Actividad 4-->
          <div class="row">
            <div class="col s1 m1 l1"><h5>4</h5></div>
            <div class="col s7 m7 l7">
              <select id="actividad4" name="actividad4">
                <option value="" disabled selected class="disabledselect">Actividad</option>
                <?php for($i=0;$i<$h;$i++): ?>
                <option value="<?= $idact[$i] ?>"><?= $descri[$i] ?></option>
                <?php endfor;?>
              </select>
            </div>
            <div class="col s4 m4 l4">
              <input type="number" id="horas4" name="horas4" placeholder="0" value="0" min="1">
            </div>
          </div>
          <!-----Actividad 5-->
          <div class="row">
            <div class="col s1 m1 l1"><h5>5</h5></div>
            <div class="col s7 m7 l7">
              <select id="actividad5" name="actividad5">
                <option value="" disabled selected class="disabledselect">Actividad</option>
                <?php for($i=0;$i<$h;$i++): ?>
                <option value="<?= $idact[$i] ?>"><?= $descri[$i] ?></option>
                <?php endfor;?>
              </select>
            </div>
            <div class="col s4 m4 l4">
              <input type="number" id="horas5" name="horas5" placeholder="0" value="0" min="1">
            </div>
          </div>
        </div>
        <!-----------------Botones--------------->
        <div class="container">
          <div class="row">
            <div class="col s4 m4 l4 btn" id="regresar" style="background-color: #122d86;">
              Regresar
            </div>
            <div class="col s8 m8 l8">
              <button type="submit" class="btn red" id="final">Finalizar Registros</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </main>

  <footer class="footeer">
    <div class="container">
      <div style="padding: 20px;">
        <i><h5><a href="https://www.escom.ipn.mx/" style="color: white;">ESCOM</a></h5></i>
      </div>
      
    </div>
  </footer>

  <script src="./js/libs/jquery-3.6.4.min.js"></script>
  <script src="./js/libs/materialize.min.js"></script>
  <script src="./js/libs/justValidate.js"></script>
  <script src="./js/libs/sweetAlert.min.js"></script>
  <script src="./js/subjects.js"></script>
</body>
</html>