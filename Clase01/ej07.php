<?php
/*
    Aplicación No 7 (Mostrar impares)
    Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
    Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
    salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
    las estructuras while y foreach.

    Alan Pucci
*/

    $numerosImpares = array(1,3,5,7,9,11,13,15,17,19);
    $contador=0;
    foreach ($numerosImpares as $valor) {
        printf($valor."<br>");
    }
    printf("<br>");
    for ($i=0; $i < 10; $i++) { 
        printf($numerosImpares[$i]."<br>");
    }
    printf("<br>");
    while($contador<10){
        printf($numerosImpares[$contador]."<br>");
        $contador++;
    }
?>