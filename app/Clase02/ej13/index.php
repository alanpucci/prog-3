<?php
    function PalabraMaximo($palabra, $max){
        if(strlen($palabra) < $max && $palabra == "Recuperatorio" || $palabra == "Parcial" || $palabra == "Programacion"){
            return 1;
        }
        return 0;
    }
?>