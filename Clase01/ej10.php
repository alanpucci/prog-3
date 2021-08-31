<?php
    /*
        Aplicación No 10 (Arrays de Arrays)
        Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
        contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
        Arrays de Arrays.
        
        Alan Pucci
    */

    $lapiceras = array(
        ['color' => 'Azul', 'precio' => 50, "marca" => 'Bic', "trazo" => "Grueso"],
        ['color' => 'Rojo', "precio" => 120, "marca" => 'Lapicera fachera', 'trazo' => "Grueso"],
        ['color' => 'Verde', 'precio' => 100, "marca" => 'La mejor','trazo' => "Fino"]
    );
    foreach ($lapiceras as $valor) {
        foreach ($valor as $key => $value) {
            printf($key.": ".$value."<br>");
        }
        printf("<br>");
    }
?>