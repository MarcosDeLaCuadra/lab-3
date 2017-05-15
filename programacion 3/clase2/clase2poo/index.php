<?php

include_once("funciones.php");//el include_once no permite repetir incluciones

include_once("calculadora.php");
//include_once("funciones.php");

//require("funciones.php");

echo "<br>";

//$resultado= Sumar(3,5);

//echo $resultado;

$resultado= calculadora::sumar(5,5);

echo $resultado;
//Sumar(3,5);

?>