<?php
// Configuración de la conexión a la base de datos
$servidor = "localhost";    // Dirección del servidor de la base de datos
$usuario = "root";          // Nombre de usuario para acceder a la base de datos
$password = "";             // Contraseña para acceder a la base de datos
$nombreBD = "qhubodb";      // Nombre de la base de datos

// Crear una instancia de la clase mysqli para establecer la conexión
$mysqli = new mysqli($servidor, $usuario, $password, $nombreBD);

// Verificar si la conexión a la base de datos ha fallado
if ($mysqli->connect_error) {
    // Mostrar un mensaje de error y terminar la ejecución del script
    die("La conexión ha fallado: " . $mysqli->connect_error);
}
?>
