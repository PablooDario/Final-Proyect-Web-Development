$(document).ready(()=>{
  const validarRegistro = new JustValidate("form#formRegistro-1");
  validarRegistro.addField("#Nombre",[
    {
      rule:"required",
      errorMessage:"Falta tu nombre"
    }
  ]).addField("#ApellidoPaterno",[
    {
      rule:"required",
      errorMessage:"Falta tu primer apellidos"
    }
  ]).addField("#Correo",[
    {
      rule:"required",
      errorMessage:"Falta tu correo"
    },
    {
      rule:"email",
      errorMessage:"Revisa formato de tu correo"
    }
  ]).onSuccess(()=>{
      var name = document.querySelector('#Nombre').value;
      var app = document.querySelector('#ApellidoPaterno').value;
      var apm = document.querySelector('#ApellidoMaterno').value;
      var mail = document.querySelector('#Correo').value;
      var dpt = document.querySelector('#Departamento').value;
      var id = document.querySelector('#Boleta').value;
    $.ajax({
      url:"./php/updatedb.php",
      method:"POST",
      data: {name: name, app: app, apm: apm, mail: mail, dpt: dpt, id: id},
      cache:false,
      success:(respAX)=>{
        let AX = JSON.parse(respAX);
        Swal.fire({
          title:"ESCOM-IPN",
          text:AX.msj,
          icon:AX.icono,
          didDestroy:()=>{
            if(AX.cod == 0 || AX.cod == 2)
              location.reload();
          }
        }); // sweetAlert/
      }
    }); // ajax/
  }); // justValidate/
  function getInfo(){
    var option = document.querySelector('#Boleta').value;
    var optionss = document.querySelector('datalist#ids_pos');
    const arr = optionss.getElementsByTagName("option");
    var checado = 0;
    for (var i = 0; i < arr.length; i++) {
      if (option == arr[i].value) checado++;
    } 
    if(checado > 0){
      $.ajax({
        url:"./php/getinfo.php",
        method:"POST",
        data: {id: option},
        cache:false,
        success:(respAX)=>{
          let AX = JSON.parse(respAX);
          var nome = document.querySelector('#Nombre');
          var apep = document.querySelector('#ApellidoPaterno');
          var apem = document.querySelector('#ApellidoMaterno');
          var corre = document.querySelector('#Correo');
          var depa = document.querySelector('#Departamento');
          nome.value = AX.name;
          apep.value = AX.app;
          apem.value = AX.apm;
          corre.value = AX.correo;
          depa.value = AX.dpto;
        }
      });
    }else{
      Swal.fire({
        title:"ESCOM-IPN",
        text:'El id proporcionado no esta en la base de datos',
        icon:'error',
        didDestroy:()=>{
        }
      });
    }
  }
  document.querySelector('#searchids').addEventListener('click', getInfo);
}); // ready/