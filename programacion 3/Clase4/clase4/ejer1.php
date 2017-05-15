<?php



      $foto= $_FILES['archivo'];
    if (isset($foto)) 
    {
        //Guardar una foto y leerla de la carpeta guardada
       //echo phpinfo(); php version 5.6.28

        $des = "img/".$foto["name"];
        
        if(file_exists($des))
        {
            $desNueno= "viejasimg/".date('j-n-Y')."__" . date('H-i-s').$foto['name'];
             move_uploaded_file($foto['tmp_name'],$desNueno); 
             echo "<img src=".$desNueno .">"; 
        }
        else
        {
            move_uploaded_file($foto['tmp_name'], $des); 
            $destino = "img/".$foto['name'];  
            echo "<img src=". $destino .">"; 
        }
        
         
       
    }

  
   //
   

?>