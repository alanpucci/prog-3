<?php
    /*
    Aplicación No 1 (Sumar números)
    Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
    supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
    se sumaron.
    Alan Pucci
    */
    $suma=0;
    $cantidad=1;
    while($suma + $cantidad < 1000){
        printf($suma." + ".$cantidad);
        $suma += $cantidad;
        $cantidad++;
        printf("=".$suma."</br>");
    }

    printf("La cantidad es: ".$cantidad);
?>
