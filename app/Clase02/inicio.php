<?php
// con require_once no tira error
    require_once "usuario.php";
    require_once "funciones.php";

    $usuario = new Usuario();
    $usuario->nombre = "Alan";

    MostrarUsuario($usuario);
?>