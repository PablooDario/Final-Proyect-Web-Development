function desplegar()
{
  document.querySelector("#correo").value="";
  document.querySelector("#pwd").value="";
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
    var x = document.getElementById("pwd");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  $("input#verContrasena").on("click",verContrasena);

  const validarLogin = new JustValidate("form#Login");
  validarLogin.addField(document.querySelector('#correo'),[
    {
      rule:"required",
      errorMessage:"Ingresa tu correo",
    },
    {
      rule:"email"
    },
    {
      rule:"minLength",
      value:5,
      errorMessage:"Mínimo 8 digitos"
    },
    {
      rule:"maxLength",
      value:40,
      errorMessage:"Máximo 40 digitos"
    }
  ]).addField(document.querySelector('#pwd'),[
    {
      rule:"required",
      errorMessage:"Falta tu contraseña"
    } /* ,
    {
      rule:"password",
      errorMessage:"Mínimo 8 caracteres, una letra, un número"
    } */
  ]).onSuccess(()=>{
    $.ajax({
      url:"./php/index.php",
      method:"POST",
      data:$("form#Login").serialize(),
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
              location.href = AX.pathto;
          }
        }); // sweetAlert/
      }
    }); // ajax/
  }); // justValidate/
}); // ready/