<?php

    include_once "persona.php";
    include_once "empleado.php";

    class Fabrica  extends Empleado
    {
        private $_empleados;
        private $_razonSocial;

        function __construct($razonSocial)
        {
           
           $this->_razonSocial = $razonSocial;
           $this->_empleados = array();
            
        }

        function  AgregarEmpleados($persona)
        {   
            
           array_push($this->_empleados, $persona);
         // $this->_empleados= $this->EliminarEmpleadosRepetidos();
          
          /*if($this->_empleados[0]._legajo==NULL)
          {
            unset($this->_empleados[0]);

          }*/
           return true;
        }

        function CalcularSueldos()
        {
            $sueldo=0;
            foreach ( $this->_empleados as $item) 
            {
               $sueldo += $item; 
            }
            return $sueldo;
        }

        function EliminarEmpleado($persona)
        {
            
            for ($i=0; $i <sizeof($this->_empleados ); $i++) 
            { 
                if ($this->_empleados[$i]->_legajo == $persona->_legajo)
                 {
                  unset($this->_empleados[$i]);
                }
            }
           
        }

        function EliminarEmpleadosRepetidos()
        {
            //revisar
           /* $int =0;
            $array[0]=0;

            foreach ($this->_empleados as $item) 
            {
                $array[$int]= $item;
                $int++;
                # code...
            }
            $nuevoArray= array_unique($array);
            return $nuevoArray;*/
        }

     
        function ToString()
        {
             $aux='';
            foreach( $this->_empleados as $item)
            {
                
                $aux =  $item->_nombre. "-" . $item->_apellido. "-"  . $item->_dni. "-" .$item->_sexo."-" . $item->_sueldo."-" . $item->_legajo ."\r\n". $aux;
            }
            echo $aux;
            return $aux;

        }

        function GuardarFabrica()
        {

           $fp= fopen("fabrica.txt", "a");
           $aux = $this->ToString();
            fwrite($fp , $aux );
            fclose($fp);
            
           
        }

        function LeerFabrica()
        {
            $fr = fopen("fabrica.txt", "r");
            $str = fread($fr, filesize("fabrica.txt"));

             echo "<br>";
              echo "<br>";
               echo "<br>";


            $array = explode("-", $str);
            var_dump($array); 
           // echo $str;
            
            fclose($fr);
            
            //buscar como hacerlo con dos objetos


        }







    }
   



?>