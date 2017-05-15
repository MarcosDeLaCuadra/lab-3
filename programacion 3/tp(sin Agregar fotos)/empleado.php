<?php
 include_once "persona.php";
class Empleado extends Persona
{
   

    protected $_legajo;
    protected $_sueldo;

    function __construct($nombre ,$apellido, $dni, $sexo, $sueldo, $legajo)
    {
           parent::__contruct($nombre ,$apellido, $dni, $sexo);           
          
            $this->_sueldo=$sueldo;
            $this->_legajo=$legajo;
    
    }

     function getLegajo()
        {
            return $this->_legajo;
        }

     function getSueldo()
        {
            return $this->_sueldo;
        }   
     function Hablar($idioma )
        {
            return  "el empleado habla". $idioma;
        }  

     function ToString()
        {

             $aux =  $this->_nombre. "-" . $this->_apellido. "-"  . $this->_dni. "-" .$this->_sexo."-" . $this->_sueldo."-" . $this->_legajo ."\r\n";
             return $aux;
        }  
}


?>