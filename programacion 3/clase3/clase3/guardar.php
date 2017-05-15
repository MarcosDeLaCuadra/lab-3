<?php


var_dump($_REQUEST); 

echo "<br>";

var_dump($_POST);

$nombre = $_POST['nombre'];
echo $nombre;

$txt=fopen("archivo.txt", "w");
 fwrite($txt,$nombre );
 fclose($txt);


 $fp= fopen("archivo.txt", "r");
$read= fread($fp, filesize("archivo.txt"));


//se ingresara el nombre de la persona y el nombre del archivo guardando el dato en el archivo
//al precionar el boton guardar se verificara si el archivo existe 
//de ya existir el archivo se copiara y se movera a la carpeta backup cambiandole el nombre por el nombre + la fecha
//al precionar el boton leer si el archivo existe se mostrara el contenido, de no exisir el archivo se informara que no existe

if (isset($_POST['guardar'])==true)
 {
     $_POST['nombre']= "ricardito";
    # code...

}






?>
