<?php
    include_once "persona.php";
    include_once "empleado.php";
    include_once "fabrica.php";

if (isset($_POST['guardar'])) 
{
    $aux= $_POST['nombre']."-".$_POST['apellido']."-".$_POST['dni']."-".$_POST['sexo']."-".$_POST['sueldo']."-".$_POST['legajo'];
    
    $objEmpleado= explode("-",$aux);    

    $empleado = new Empleado($_POST['nombre'], $_POST['apellido'], $_POST['dni'], $_POST['sexo'], $_POST['sueldo'], $_POST['legajo']);

     $fp= fopen("empleados.txt", "a");        
     fwrite($fp , $empleado->ToString() );
     fclose($fp);

   echo '<a href="mostrar.php">El empleado se guardo exitosamente </a>';
     
}
else
{
    echo '<a href="index.html">El empleado no se  guardo exitosamente </a>';
}






?>