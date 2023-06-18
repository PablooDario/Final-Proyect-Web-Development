$(document).ready(function(){
    $('select').formSelect();

    function report(){
    var academia = document.querySelector('select#academia').value;
    $.ajax({
        url:"./php/academiapdf.php",
        method:"POST",
        data: {academia: academia},
        cache:false,
        success:(respAX)=>{
        let AX = JSON.parse(respAX);
        Swal.fire({
            title:"ESCOM - IPN",
            text:AX.msj,
            icon:AX.icono,
            didDestroy:()=>{
            if(AX.cod == 1) location.href = AX.pathto;
            }
        });
        }
    }); 
    }
    document.querySelector('#generatereport').addEventListener('click', report);
});