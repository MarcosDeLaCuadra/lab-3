window.onload = function(){//el onload sirve para q carge la pagina primero(index.html)

    //alert("asd");
    var parrafos = document.getElementsByTagName("p");

    for(var i=0; i< parrafos.length; i++)
    {
        parrafos[i].innerHTML="parrafo "+(i+1);

    }

   /* parrafos[0].innerHTML= "primer parrafo";
    parrafos[1].innerHTML= "segundo parrafo";
    parrafos[2].innerHTML= "tercero parrafo";*/

    var contador= 0;

    var txtTexto= document.getElementById("texto");

    var txtTexto2= document.getElementById("texto2");

   /* txtTexto.onblur = function()//onblur es cuando saco foco
    {
        contador ++;
        txtTexto2.value= contador;

    }*/

   /* txtTexto.onchange = function()//funciona cada vez q se modifica algo dentro del input y se saca el foco
    {
        contador ++;
        txtTexto2.value= contador;

    }*/
    txtTexto.onkeyup = function()//hay tres tipos: onkypress , onkeydown y onkeyup
    {
       
        txtTexto2.value= txtTexto.value;

    }

}

