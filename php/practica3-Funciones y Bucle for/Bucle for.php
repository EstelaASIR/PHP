<?php
/*
# $counter++    es igual a     $counter=$counter+1

#BUCLE FOR (contamos de dos en dos):
for ($counter=0; $counter < 10; $counter=$counter+2)
{
        echo $counter;
}
*/

/*
#FUNCIONES:
function suma ($num1,$num2,)  
{
    return $num1 +$num2;
}
echo suma (1,2);
*/

#FUNCION QUE CONCATENE DOS CADENAS: (DOS TEXTOS QUE LOS UNES)

function concatenar ($texto1,$texto2)
{
 return $texto1 . $texto2;
}
echo concatenar ("Hola"," que tal");


?>