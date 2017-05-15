<?php


$arrayImpares[0]= 0;
$contImpar=0;
$num=0;

    for ($i=0; $i <10 ; ) 
    { 
        $num ++;
       if( ($num%2)!=0 )
       {
           $arrayImpares[$contImpar]=$num;
           $contImpar ++;
           $i ++;
       }
       
    }

    foreach ($arrayImpares as $variable ) {
        # code...
        echo $variable. " ";
        echo "<br>";
       
       
    }

    var_dump($arrayImpares);

?>