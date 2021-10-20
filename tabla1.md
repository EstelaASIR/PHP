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
echo "<table border=’2px’><tr><th>nombre</th></tr>";
$contador = 0;
foreach ($nombres as $nombre){
    echo "<tr><td>".$nombre."</td></tr>";
}

$edades = array ("27", "25", "27", "43");
echo "<table border=’2px’><tr><th>nombre</th></tr>";
$contador = 0;
foreach ($edades as $edad){
    echo "<tr><td>".$edad."</td></tr>";
}
echo "</table>";
?>
    
</body>
</html>
