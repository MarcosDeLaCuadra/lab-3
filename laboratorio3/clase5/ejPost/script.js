$(document).ready(function(){

var peticion;

    $("#btnEnviar").click(function(){

        var datos= "?nombre" + $("#txtNombre").val()+ "&apellido" + $("#txtApellido").val();
        peticion= new XMLHttpRequest();
        peticion.onreadystatechange = procesarPeticion;
        peticion.open("POST", "pagina.php", true);
        //
        peticion.setRequestHeader( "content-Type","application/x-www");
        peticion.send(prepararDatos());
     
       
    });

    

   function procesarPeticion(){
             if(peticion.readyState == 4 && peticion.status ==200)
                {

                    $("#resultados").text(peticion.responseText);
                }


        };

});