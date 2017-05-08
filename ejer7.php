<?php


$arrayImpares= 0;
$contImpar=0;
$num=0;

    for ($i=0; $i <10 ; $i++) 
    { 
        $num ++;
       if( ($num%2)!=0 )
       {
           $arrayImpares[$contImpar]=$num;
           $contImpar ++;
           $i ++;
       }
       
    }

?>