$(document).ready(function(){ //Valida si el usuario ha iniciado sesion
    $.ajax({
      url:"./php/check.php",
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
            if(AX.cod != 1)
              location.href = AX.pathto;
          }
        }); // sweetAlert/
      }
    }); // ajax/
  });

