<?php

$host = 'localhost';
$usuario = 'root';
$contraseña = '2468';
$basedatos = 'mi_proyecto';
$conexion = new mysqli($host, $usuario, $contraseña, $basedatos);
if ($conexion->connect_errno) {
    echo "fallos en conexion";
    exit();
}
