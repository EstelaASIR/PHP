<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
$nombres = array ("Estela", "Gueorgui", "Linda", "Alfonso");
$edades = array ("27", "25", "27", "42");
$profesion = array ("Diseñador Web", "Consultor SQL", "Soporte Técnico","Desarrollador Web");

echo "<table border=’2px’><tr><th> Nombre: </th><th> Edad: </th><th> Profesion: </th></tr>";

$contador = 0;
foreach ($nombres as $nombre){

    echo "<tr><td>".$nombre."</td><td>".$edades[$contador]."</td><td>".$profesion[$contador]."</td></tr>";
    $contador++;

}
echo "</table>"
?>




</body>
</html>
