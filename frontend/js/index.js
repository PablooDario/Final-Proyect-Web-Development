
function desplegar()
{
  document.querySelector("#boleta").value="";
  document.querySelector("#contrasena").value="";
  let login=document.querySelector(".log");
  let inicio=document.querySelector(".boton1");
  if(inicio.style.display==="block")
  {
    login.style.display="flex";
    inicio.style.display="none";
  }
  else
  {
    login.style.display="none";
    inicio.style.display="block";
  }
};
document.querySelector(".despl").addEventListener("click", desplegar)
document.querySelector(".cancel").addEventListener("click", desplegar)

$(document).ready(()=>{
  function verContrasena() {
    var x = document.getElementById("contrasena");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  $("input#verContrasena").on("click",verContrasena);

  const validarLogin = new JustValidate("form#Login");
  validarLogin.addField("#boleta",[
    {
      rule:"required",
      errorMessage:"Ingresa tu boleta",
      color:'white'
    },
    /*{
      rule:"integer",
      errorMessage:"Deben ser solo números"
    },*/
    {
      rule:"minLength",
      value:8,
      errorMessage:"Mínimo 8 digitos"
    },
    {
      rule:"maxLength",
      value:10,
      errorMessage:"Máximo 10 digitos"
    }
  ]).addField("#contrasena",[
    {
      rule:"required",
      errorMessage:"Falta tu contraseña"
    },
    {
      rule:"password",
      errorMessage:"Mínimo 8 caracteres, una letra, un número"
    }
  ]).onSuccess(()=>{
    $.ajax({
      url:"./php/index_AX.php",
      method:"POST",
      data:$("form#formLogin").serialize(),
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
              location.href = "./php/alumno.php";
          }
        }); // sweetAlert/
      }
    }); // ajax/
  }); // justValidate/
}); // ready/