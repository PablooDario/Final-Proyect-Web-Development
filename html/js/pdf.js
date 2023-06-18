$(document).ready(()=>{ 
    function resetsurv(){
        $.ajax({
            url:"./php/rset.php",
            method:"POST",
            data: "rset=1",
            cache:false,
            success:(respAX)=>{
              let AX = JSON.parse(respAX);
              Swal.fire({
                title:"ESCOM - IPN",
                text:AX.msj,
                icon:AX.icono,
                didDestroy:()=>{
                    if(AX.cod==1) location.reload();
                }
              }); // sweetAlert/
            }
          });
    }   
    document.querySelector('#reset').addEventListener("click",resetsurv);
});