<?php
    /*
        Aplicación No 6 (Carga aleatoria)
        Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
        función rand). Mediante una estructura condicional, determinar si el promedio de los números
        son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
        resultado.

        Alan Pucci
    */
    $acumulador = 0;
    $numeros = array(rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10));
    foreach ($numeros as $valor) {
        $acumulador += $valor;
    }
    $resultado = $acumulador / 5;
    if($acumulador / 5 > 6){
        printf("Es mayor que 6. Resultado: ".$resultado);
    }
    else{
        if($acumulador / 5 < 6){
            printf("Es menor que 6. Resultado: ".$resultado);
        }
        else{
            printf("Es 6!!");
        }
    }
?>