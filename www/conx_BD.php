<?php
ob_start(); 
$conexion = new mysqli("localhost", "root", "test", "tienda");
$conexion->set_charset("utf8mb4");


if ($conexion->connect_error) {
    die("Error de conexión " . $conexion->connect_error);
    }
    //echo "Se ha conectado correctamente" . "<br>";
    ob_end_flush();
?>