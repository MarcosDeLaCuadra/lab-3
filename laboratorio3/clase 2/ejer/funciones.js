function Sumar(){

    var num1;
    var num2;
    var suma;
    var txtResul;

    num1= parseInt( document.getElementById("num1").value);
    num2 =parseInt( document.getElementById("num2").value);

    suma= num1 + num2;

    //isNan sirve para validar si es un numero

    txtResul= document.getElementById("resultado");

    txtResul.value=suma;






}