<?php
    require "funciones.php";
    require "usuario.php";
    require "inicio.php";

    $unUsuario = new Usuario();
    $unUsuario->nombre = "Alan";

    Saludar($unUsuario->nombre);
?>