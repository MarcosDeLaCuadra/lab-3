 function Saludar(){

        //alert("hola mundo \n para bajar de linea");

       // console.log("saludar"); escribir en consola

      // document.write("hola mundo <br>"); //escribe en la ventana del navegador
       // document.write("hola mundo");

       var numero;
       var numero2;
       var suma;

      // isNaN(numero);
      //isNaN(numero2);

      /* numero =parseInt(prompt("ingrese un numero"));
       numero2 =parseInt(prompt("ingrese otro numero"));*/

      // numero= parseInt(numero);
      // numero2=parseInt(numero2);

      // suma= numero+ numero2;
      // alert("su numero es "+ suma);


    /*  suma= confirm("tenes nombre?"); //comfirm devuelve un bool
      if(suma){

          alert("si tengo noimbre")
      }
      else{

          alert("no tengo nombre");
      }*/

      var nombre;
      var txtNombre;
      var txtSaludo;


     // nombre= document.getElementById("Nombre").value;//aca traes solo el contenido
      
      txtNombre= document.getElementById("Nombre");//aca traigo todo el txt

      txtSaludo=document.getElementById("Saludar");
      nombre= txtNombre.value;
      txtSaludo.value= "hola " + nombre;  

     // alert("su nombre es "+ nombre);


      
    }