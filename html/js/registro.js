$(document).ready(()=>{
  const validarRegistro = new JustValidate("form#formRegistro");
  validarRegistro.addField("#boleta",[
    {
      rule:"required",
      errorMessage:"Falta tu boleta"
    },
    {
      rule:"integer",
      errorMessage:"Deben ser solo números"
    },
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
  ]).addField("#nombre",[
    {
      rule:"required",
      errorMessage:"Falta tu nombre"
    }
  ]).addField("#primerApe",[
    {
      rule:"required",
      errorMessage:"Falta tu primer apellidos"
    }
  ]).addField("#correo",[
    {
      rule:"required",
      errorMessage:"Falta tu correo"
    },
    {
      rule:"email",
      errorMessage:"Revisa formato de tu correo"
    }
  ]).addField("#telcel",[
    {
      rule:"required",
      errorMessage:"Falta tu número teléfonico"
    },
    {
      rule:"integer",
      errorMessage:"Solo digitos"
    },
    {
      rule:"minLength",
      value:10,
      errorMessage:"Mínimo 10 digitos"
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
      url:"./php/registro_AX.php",
      method:"POST",
      data:$("form#formRegistro").serialize(),
      cache:false,
      success:(respAX)=>{
        let AX = JSON.parse(respAX);
        Swal.fire({
          title:"ESCOM-IPN",
          text:AX.msj,
          icon:AX.icono,
          didDestroy:()=>{
            if(AX.cod == 1)
              location.href = "./";
            if(AX.cod == 0 || AX.cod == 2)
              location.reload();
          }
        }); // sweetAlert/
      }
    }); // ajax/
  }); // justValidate/
}); // ready/