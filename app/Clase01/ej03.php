<?php
    /*
        Aplicación No 3 (Obtener el valor del medio)
        Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
        el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
        variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
        Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
        Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”

        Alan Pucci
    */
    $a = 10;
    $b = 15;
    $c = 15;
    switch(true){
        case ($a>$b && $a<$c) || ($a>$c && $a<$b):
            printf("a=".$a);
            break;
        case ($b>$c && $b<$a) || ($b>$a && $b<$c):
            printf("b=".$b);
            break;
        case ($c>$a && $c<$b) || ($c>$b && $c<$a):
            printf("c=".$c);
            break;
        default:
            printf("No hay valor del medio");
    }
?>