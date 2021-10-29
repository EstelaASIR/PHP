# LOGS:
------------------------

``` HTML

<!DOCTYPE html>
<html lang="en">

<style>

fieldset.cajatitulo 
{
  border: black 5px solid;
  width: 1000px;
  height:300px;
  text-align:center;  
}

h1.titulo 
{
  text-align:center;
}

body.colorfondo 
{
	background-color: #d5cddb;
}



</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<fieldset class="cajatitulo">
<body class="colorfondo">

<h1 class="titulo"> PROYECTOLOGS: </h1>


<fieldset>
<legend><h2 class="tit">Elige el tipo de Log:</h2></legend>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="opciones">
    <select name="opcionlog">
			<option selected value="nulo">Elige un fichero</option>
            <option value="AccessLog">Access Log</option>
			<option value="ErrorLog">Error Log</option>
            <option value="InstallLog">Install Log</option>
            </optgroup>
    </select>
	<input class="enviar" type="Submit" name="Enviar" value="Enviar consulta"></br>
</form>

<?php

if(isset($_POST['Enviar']) &&  ($_POST['opcionlog']!="nulo")){
	$opcionlog = $_POST['opcionlog'];
	
	switch($opcionlog) {
		case "AccessLog":
			$fichero = "C:\\xampp\\apache\\logs\\access.log";
			break;
		case "ErrorLog":
			$fichero = "C:\\xampp\\apache\\logs\\error.log";
			break;
		case "InstallLog":
			$fichero = "C:\\xampp\\apache\\logs\\install.log";
			break;
	}
	
	$datalines = file($fichero);
	echo "<b>Fichero abierto $fichero</br></b>";
	foreach ($datalines as $linea) {
		echo $linea . "<br>";
	}
	
}

?>

</fieldset>
</fieldset>
</body>
</html>

```

