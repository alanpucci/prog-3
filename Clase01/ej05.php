<?php

    /*
        Aplicación No 5 (Números en letras)
        Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
        por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
        entre el 20 y el 60.
        Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.

        Alan Pucci
    */
    $num = 57;
    $decena = substr($num, 0, 1);
    $unidad = substr($num, 1, 2);
    if($num>19 && $num<61){
        switch($decena){
            case 2:
                printf("Veinte");
                break;
            case 3:
                printf("Treinta");
                break;
            case 4:
                printf("Cuarenta");
                break;
            case 5:
                printf("Cincuenta");
                break;
            case 6:
                printf("Sesenta");
                break;
        }
        switch($unidad){
            case 1:
                printf(" y uno");
                break;
            case 2:
                printf(" y dos");
                break;
            case 3:
                printf(" y tres");
                break;
            case 4:
                printf(" y cuatro");
                break;
            case 5:
                printf(" y cinco");
                break;
            case 6:
                printf(" y seis");
                break;
            case 7:
                printf(" y siete");
                break;
            case 8:
                printf(" y ocho");
                break;
            case 9:
                printf(" y nueve");
                break;
        }
    }
?>