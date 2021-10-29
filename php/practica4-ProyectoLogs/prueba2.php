<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
<h1 class="titulo" > PROYECTOLOGS: </h1> 
</fieldset>

<fieldset>
<legend> <h2 class="titulo" > Elige el tipo de Log: </h2> </legend>
<form class="opciones" action="" method="POST">		
    <select name="menu">
            <option selected>...</option>
            <optgroup label="Tipos de Log:">
            <option value="1">Access Log</option>
			<option value="2">Error Log</option>
            <option value="3">Install Log</option>
            <option value="4">Error log</option>
            </optgroup>
            <input type="submit" value="Enviar">


    </select>


<?php
/*
$datalines = file("C:\\xampp\\apache\\logs\\access.log");

foreach ($datalines as $linea) {
	echo $linea . "<br>";
}
/*

/*
# 1º CODIGO:  BUCLE WHILE (VA A DAR VUELTAS HASTA QUE LA CONDICION SE CUMPLA)   !FEOF--> FIN DE FICHERO 
$fichero = fopen("C:\\xampp\\apache\\logs\\access.log", "r");
#SE EJECUTA TANTAS VECES COMO: "(while) mientras (!) no sea (feof($fichero))
while (!feof($fichero)){       
    $linea = fgets($fichero);       #LA GUARDO EN UNA VARIABLE.
    echo $linea;                    # LA SACO EN PANTALLA
    echo "<br>";
}
#CERRAR FICHERO
fclose($fichero);
*/
?>

</form>
</fieldset>

</body>
</html>