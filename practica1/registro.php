<?php
/*
#EDAD DEL JEFE:
$edad = $_POST["edad"];
echo "La edad del jefe es:" . $edad;
*/


#CALCULADORA:
 $numero1 = $_POST["num1"];
 $numero2 = $_POST["num2"];
 $operacion = $POST["operacion"];
echo $operacion;

 if($operacion == "suma") {
     $total = $numero1 + $numero2;
 } else {
     $total = $numero1 + $numero2;
 }

echo "<br>";
echo "El resultado:" . $total;
echo "<br>";



/*
#CONTADOR:
$nombres =array ("Alfonso","Estela","Javier","Pablo");

$contador = 0;
foreach ($nombres as $nombre){
    echo <"br">;
    echo $nombre;  
    echo <"br">;
    $contador ++; //$contador = $contador + 1;
    echo $contador;
}
*/


?>