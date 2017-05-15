
//enviar datos
  var myobj= {"nombre":"carlos","edad":"10"};
  var miJson = JSON.stringify(miobj);

  //alert(miJson["nombre"]);

  //recibir datos

  var myJson = {"nombre":"carlos","edad":"10"};
  var myObj= JSON.parse(myJson);