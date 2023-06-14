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
    
document.querySelector("#final").addEventListener("click",sumHoras);