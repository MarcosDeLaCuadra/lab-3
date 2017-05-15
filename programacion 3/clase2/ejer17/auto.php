<?php

class Auto
{

   public $_color;
  public  $_precio;
  public  $_marca;
  public  $_fecha;

    function Auto($_marca, $_color,$_precio=0, $_fecha=0 )
    {
        $this->_marca= $_marca;
        $this->_color = $_color;        

    }

    function AgregarImpuestos($suma)
    {
        $this->_precio += $suma; 
    }

    static function MostrarAuto($auto)
    {
        echo "precio". $this->_precio . " marca " .  $this->_marca . " color " .  $this->_color . " fecha " .  $this->_fecha;

    }
    function Equals($auto1 , $auto2)
    {
        if($auto1->_marca==$auto2->_marca  )
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    static function Add($auto1, $auto2)
    {
        if($auto1->_marca==$auto2->_marca && $auto1->_color==$auto2->_color)
        {
            return $auto1->_precio + $auto2->precio;
        }
    }


   

}

?>