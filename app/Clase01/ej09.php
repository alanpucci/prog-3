<?php
    /*
        Aplicación No 9 (Arrays asociativos)
        Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
        contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
        lapiceras.
        
        Alan Pucci
    */

    $lapicera = array('color' => 'Azul', 'precio' => 50, "marca" => 'Bic', "trazo" => "Grueso");
    foreach ($lapicera as $key => $value) {
        printf($key.": ".$value."<br>");
    }
    printf("<br>");
    $lapicera = array('color' => 'Rojo', "precio" => 120, "marca" => 'Lapicera fachera', 'trazo' => "Grueso");
    foreach ($lapicera as $key => $value) {
        printf($key.": ".$value."<br>");
    }
    printf("<br>");
    $lapicera = array('color' => 'Verde', 'precio' => 100, "marca" => 'La mejor','trazo' => "Fino");
    foreach ($lapicera as $key => $value) {
        printf($key.": ".$value."<br>");
    }
?>