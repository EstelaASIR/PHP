```php
<?php
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
?>
```
