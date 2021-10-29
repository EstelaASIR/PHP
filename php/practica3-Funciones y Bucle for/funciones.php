<?php

#SCOPE:
$a = 3;

function foo(){
    global $a;    #usando global te dice que coja la variable de arriba, pero no lo recomienda mejor meterlo en una variable.
    $a += 2;      #$a =$a +2;
    echo "valor dentro de la funcion".$a;
}

foo();
echo "<br>";
echo "valor fuera de la funcion".$a;


/* 
#SCOPE:
$a = 3;

function foo(){
    $a=0;    #usando global te dice que coja la variable de arriba, pero no lo recomienda mejor meterlo en una variable.
    $a += 2;      #$a =$a +2;
    echo "valor dentro de la funcion".$a;
}

foo();
echo "<br>";
echo "valor fuera de la funcion".$a;
*/


?>


