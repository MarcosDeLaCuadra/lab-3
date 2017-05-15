<?php

      include_once "persona.php";
    include_once "empleado.php";
    include_once "fabrica.php";



            $fr = fopen("empleados.txt", "r");
            $str = fread($fr, filesize("empleados.txt"));

            echo "<br>"; 
            $array = explode("\r\n", $str);
             fclose($fr);

            $objEmpleado[0]=null;
          
           for ($i=0; $i < sizeof($array) ; $i++) 
           { 
             $objEmpleado[$i] = explode("-", $array[$i]);
           }
           var_dump($objEmpleado);
          
           $empleado[0]=null;

           for ($i=0; $i < sizeof($objEmpleado) ; $i++) 
           { 
               if( $objEmpleado[$i][5]!=NULL)
               {
                  $empleado[$i] = new Empleado($objEmpleado[$i][0], $objEmpleado[$i][1] , $objEmpleado[$i][2] , $objEmpleado[$i][3], $objEmpleado[$i][4] ,$objEmpleado[$i][5],$objEmpleado[$i][6]);
                    
               }
              
                     
             
           }
           var_dump($empleado);

           // unset($empleado[6]);

            for ($i=0; $i < sizeof($empleado) ; $i++) 
           { 
               echo "<br>";
               echo $empleado[$i]->ToString();              
             
           }

           //ejemplo de foto
           echo "<img src=\"http://bucket1.glanacion.com/anexos/fotos/33/motogp-2412833w620.jpg\">"; 
         


        
            
           



?>