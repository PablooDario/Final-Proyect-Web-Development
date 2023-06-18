$(document).ready(function(){
function resetear(){
    var id = document.querySelector('#reseteoencuesta').value;
    $.ajax({
      url:"./php/reseteo.php",
      method:"POST",
      data: {id: id},
      cache:false,
      success:(respAX)=>{
        let AX = JSON.parse(respAX);
        Swal.fire({
          title:"ESCOM - IPN",
          text:AX.msj,
          icon:AX.icono,
          didDestroy:()=>{
          }
        }); // sweetAlert/
      }
    }); 
  }
  document.querySelector('#reseteoencuesta').addEventListener('click', resetear);
});