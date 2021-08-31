<?php
    /*
        Aplicación No 2 (Mostrar fecha y estación)
        Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
        distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
        año es. Utilizar una estructura selectiva múltiple.
        Alan Pucci
    */
    $mes = date('m');
    $dia = date('d');
    printf(date('d-m-Y')."<br>");
    printf(date('l F dS')."<br>");
    switch($mes){
        case '12':
            if($dia <= 21){
                printf("Es verano");
            }
            else{
                printf("Es primavera");
            }
            break;
        case '01':
        case '02':
            printf("Es verano");
            break;
        case '03':
            if($dia <= 20){
                printf("Es verano");
            }
            else{
                printf("Es otoño");
            }
            break;
        case '04':
        case '05':
            printf("Es otoño");
            break;
        case '06':
            if($dia <= 20){
                printf("Es otoño");
            }
            else{
                printf("Es invierno");
            }
            break;
        case '07':
        case '08':
            printf("Es invierno");
            break;
        case '09':
            if($dia <= 20){
                printf("Es invierno");
            }
            else{
                printf("Es primavera");
            }
            break;
        case '10':
        case '11':
            printf("Es primavera");
            break;
    }
?>