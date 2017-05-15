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
           return true;
        }

        function CalcularSueldos()
        {

            return double;
        }

        function EliminarEmpleado($persona)
        {
            unset($persona);
            return true;
        }

        private function EliminarEmpleadosRepetidos()
        {
             array_unique($this);
        }

        function ToString()
        {
             $aux='';
            foreach( $this->_empleados as $item)
            {
                
                $aux =  $item->_nombre. "-" . $item->_apellido. "-"  . $item->_dni. "-" .$item->_sexo."-" . $item->_legajo."-" . $item->_sueldo ." ". $aux;
            }
            return $aux;

        }

        function GuardarFabrica()
        {

           $fp= fopen("fabrica.txt", "w");
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