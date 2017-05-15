<?php

    //localhost/phpmyadmin   es para base de datos

     $conexion =mysqli_connect("localhost","root","", "ejemplo1");   
     $consulta=mysqli_query($conexion, "SELECT  * FROM tablauno" );
     //var_dump($consulta);
    // $id= 2;
     $filas=mysqli_fetch_object($consulta);
     $asd= mysqli_query($conexion, "SELECT id, nombre FROM tablauno ");
     $asd2=mysqli_fetch_object($asd);
    var_dump($asd2);
    echo "<br>";
     var_dump($filas);
?>