<?php 
    /*
        Aplicación No 4 (Calculadora)
        Escribir un programa que use la variable $operador que pueda almacenar los símbolos
        matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
        símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
        resultado por pantalla.

        Alan Pucci
    */

    $operador = '+';
    $op1 = 45;
    $op2 = 99;
    switch($operador){
        case '+':
            printf($op1 + $op2);
            break;
        case '-':
            printf($op1 - $op2);
            break;
        case '/':
            if($op2 == 0){
                printf("No se puede dividir por 0");
                break;
            }
            printf($op1 / $op2);
            break;
        case '*':
            printf($op1 * $op2);
            break;
    }
?>