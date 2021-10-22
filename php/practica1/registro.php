<?php
/*
#EDAD DEL JEFE:
$edad = $_POST["edad"];
echo "La edad del jefe es:" . $edad;
*/

#CALCULADORA:
	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];
	$operacion = $_POST['operacion'];
	
	if($operacion == "suma"){
		$solucion = $numero1 + $numero2;
	}else if($operacion == "resta"){
		$solucion = $numero1 - $numero2;
	}else if($operacion == "multiplicacion"){
		$solucion = $numero1 * $numero2;
	}else if($operacion == "division"){
		$solucion = $numero1 / $numero2;
	}
    echo "<br>";
	echo "El resultado es: ".$solucion;
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