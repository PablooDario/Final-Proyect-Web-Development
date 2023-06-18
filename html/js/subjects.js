//Para que funcionen los select option con materialize
$(document).ready(function() {
    $('select').formSelect();
});

//Display de materias y actividades (boton de continuar y regresar)
var ext = document.querySelector(".extras");
var act = document.querySelector("#actividades");
var mat = document.querySelector("#materias");
ext.style.display="none";
act.style.display="none";

function displayExtras()
{
    if (ext.style.display === "none")
        ext.style.display = "block";
    else 
        ext.style.display= "none";
};

function displayAct()
{
    if (act.style.display === "none")
    {
        act.style.display = "block";
        mat.style.display = "none"
    }
    else
    {
        act.style.display = "none";
        mat.style.display = "block";        
    } 
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
};

document.querySelector("#regresar").addEventListener("click", displayAct);
document.querySelector("#MaxMaterias").addEventListener("click",displayExtras);
document.querySelector("#continue").addEventListener("click",displayAct);

//Validacion cuando finalice la encuesta
function sumHoras() 
{
    var sum= parseInt(document.querySelector("#horas1").value)
    sum+=parseInt(document.querySelector("#horas2").value)
    sum+=parseInt(document.querySelector("#horas3").value)
    sum+=parseInt(document.querySelector("#horas4").value)
    var mat1= document.querySelector("#materia1").value

    //Si el numero de horas es menor a 22, mayor a 1 y selecciono por lo menos 1 materia, sale un sweetalert
    if (sum>1 && sum<= 22 && mat1!=="") 
    {
        Swal.fire({
        title: 'Registro Completo',
        text: 'Haz finalizado tu registro. ¡Gracias!',
        icon: 'success',
        didDestroy:()=>{
              location.href = "https://www.escom.ipn.mx/";
        }
        });
    } 
    //Si hizo algo mal
    else 
    {
        Swal.fire({
        title: 'Registro incompleto',
        text: 'Porfavor asegurese que la suma de las horas semanales sea mayor a 1, menor a 22 y que haya seleccionado por lo menos 1 materia en la sección anterior',
        icon: 'error'
        });
    }
}
    

document.querySelector("#final").addEventListener("click",sumHoras);$(document).ready(function(){ //Valida si el usuario ha iniciado sesion
    $.ajax({
      url:"./php/validator.php",
      method:"POST",
      data: "login=1",
      cache:false,
      success:(respAX)=>{
        let AX = JSON.parse(respAX);
        if(AX.cod == 0)
        Swal.fire({
          title:"ESCOM - IPN",
          text:AX.msj,
          icon:AX.icono,
          didDestroy:()=>{
              location.href = AX.pathto;
          }
        }); // sweetAlert/
      }
    }); // ajax/

    $('select').formSelect();

    function cargaMat(num){ //Carga el plan, la carrera y la academia y descarga las materias que pertenezcan a ese campo
        var academia = $('#departamento'+num).val();
        var plan = $('#plan'+ num).val();
        var programa = $('#carrera' + num).val();
        $.ajax({
        url: './php/getsubs.php',
        method: 'POST',
        data: { academia: academia, plan: plan, programa: programa},
        success: function(respAX){
            let AX = JSON.parse(respAX);
            const select = document.querySelector('select#materia'+num);
            for(var i=0;i<AX.counter;i++)
            {
                let newOption = new Option(AX.name[i], AX.id[i]);
                select.appendChild(newOption);
                $('select').formSelect();

            }
        }
        });
    }
    $('select#departamento1').on('change', function() {
        cargaMat(1);
    });
    $('select#departamento2').on('change', function() {
        cargaMat(2);
    });
    $('select#departamento3').on('change', function() {
        cargaMat(3);
    });
    $('select#departamento4').on('change', function() {
        cargaMat(4);
    });
    $('select#departamentoE1').on('change', function() {
        cargaMat('E1');
    });
    $('select#departamentoE2    ').on('change', function() {
        cargaMat('E2');
    });
});

//Display de materias y actividades (boton de continuar y regresar)
var ext = document.querySelector(".extras");
var act = document.querySelector("#actividades");
var mat = document.querySelector("#materias");
ext.style.display="none";
act.style.display="none";

function displayExtras()
{
    if (ext.style.display === "none")
        ext.style.display = "block";
    else 
        ext.style.display= "none";
};

function displayAct()
{
    if (act.style.display === "none")
    {
        act.style.display = "block";
        mat.style.display = "none"
    }
    else
    {
        act.style.display = "none";
        mat.style.display = "block";        
    } 
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
};

document.querySelector("#regresar").addEventListener("click", displayAct);
document.querySelector("#MaxMaterias").addEventListener("click",displayExtras);
document.querySelector("#continue").addEventListener("click",displayAct);

//Validacion cuando finalice la encuesta
function sumHoras() 
{
    var sum= parseInt(document.querySelector("#horas1").value)
    sum+=parseInt(document.querySelector("#horas2").value)
    sum+=parseInt(document.querySelector("#horas3").value)
    sum+=parseInt(document.querySelector("#horas4").value)
    sum+=parseInt(document.querySelector("#horas5").value)
    const materias = [];
    const mats = []; 
    var checker = 0;
    for(var i=0;i<4;i++) materias[i] = document.querySelector("#materia"+(i+1)).value;
    for(var i=4;i<6;i++) materias[i] = document.querySelector("#materiaE"+(i-3)).value;
    for(var i=0;i<6;i++){
        if(materias[i] != ""){
            mats[checker] = materias[i];
            checker++;
        }
    }
    const acts = [];
    const acps = [];
    var tempcc = 0;
    for(var i=0;i<5;i++){ acts[i] = document.querySelector("#actividad"+(i+1)).value};
    for(var i=0;i<5;i++){
        if(acts[i] != ""){
            acps[tempcc] = acts[i];
            tempcc++;
        }
    }
    //Si el numero de horas es menor a 22, mayor a 1 y selecciono por lo menos 1 materia, sale un sweetalert
    if (sum>1 && sum<= 22 && checker>0) 
    {
        $.ajax({
            url:"./php/upsubs.php",
            method:"POST",
            data: {materias: mats, actividad: acps, canmat: checker, canact: tempcc, sumhour: sum},
            cache:false,
            success:(respAX)=>{
              let AX = JSON.parse(respAX);
              Swal.fire({
                title:"ESCOM - IPN",
                text:AX.msj,
                icon:AX.icono,
                didDestroy:()=>{
                  if(AX.cod == 0)
                    location.reload();
                  else
                    location.href = AX.pathto
                }
              }); // sweetAlert/
            }
          });
    } 
    //Si hizo algo mal
    else 
    {
        Swal.fire({
        title: 'Registro incompleto',
        text: 'Por favor asegurese que la suma de las horas semanales sea mayor a 1, menor a 22 y que haya seleccionado por lo menos 1 materia en la sección anterior, Materias: '+checker+' Suma:'+sum,
        icon: 'error'
        });
    }
}
    
document.querySelector("#final").addEventListener("click",sumHoras);
