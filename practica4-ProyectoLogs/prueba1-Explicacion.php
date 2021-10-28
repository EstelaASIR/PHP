<?php

/*
#### EXPLICACIONES:
# fopen: sirve para abrir ficheros. Es una función php para trabajar con ficheros
# puede tanto escribir como leer y tiene dos parámetros.
# Primer parámetro: es la ruta del fichero, hay una cosa rara, es \\
# Segundo parámetro: es la forma en que abrimos el fichero r--> lectura   w--> escritura
# $fichero es unavariable, que en programación se le denomina handler
# Es una variable donde guarda o apunta al fichero abierto.
# === busca que tengan el mismo valor y mismo tipo de dato.     
# == busca datos del mismo valor
*/


/*
# 1º CODIGO:  BUCLE WHILE (VA A DAR VUELTAS HASTA QUE LA CONDICION SE CUMPLA)   !FEOF--> FIN DE FICHERO 
$fichero = fopen("C:\\xampp\\apache\\logs\\error.log", "r");
#SE EJECUTA TANTAS VECES COMO: "(while) mientras (!) no sea (feof($fichero))
while (!feof($fichero)){       
    $linea = fgets($fichero);       #LA GUARDO EN UNA VARIABLE.
    echo $linea;                    # LA SACO EN PANTALLA
    echo "<br>";
}
#CERRAR FICHERO
fclose($fichero);
*/


/*
#2º CODIGO: SACAR SOLO UNA PARTE DEL FICHERO: (funciona)
$mystring ='abc';
$findme   ='a';
$pos      =strpos($mystring,$findme);

if ($pos === false) {
    echo "la cadena '$findme' no fue encontrada en la cadena '$mystring'";
}
else {
    echo "la cadena '$findme' fue encontrada en la cadena '$mystring'";
    echo "y existe en al posición $pos";
}
*/

/*
#3º CODIGO: FILTRAMOS EL LOG PARA QUEDARNOS LO QUE NOS INTERESA: (funciona)
$cad_find = "[php:error]";
$fichero =  fopen("C:/xampp/apache/logs/error.log", "r");
echo $fichero; 

while (!feof($fichero)){
    $linea = fgets($fichero);
    $busqueda= strpos($linea,$cad_find);   
    if ($busqueda !== false) {
        echo $linea;
        echo "<br>";
    }
}
*/


/*
# 4º CODIGO: COMO EJECUTAR 1 COMANDO DEL SISTEMA:
$salida = shell_exec('dir');
echo "<pre>$salida</pre";
*/



?>



