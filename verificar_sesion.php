<?php
// Iniciar sesión
session_start();

// Verificar si el usuario está logeado
if (isset($_SESSION['usuario_id']) && isset($_SESSION['usuario_nombre'])) {
    // Usuario logeado
    $response = array('logged_in' => true, 'usuario_nombre' => $_SESSION['usuario_nombre']);
} else {
    // Usuario no logeado
    $response = array('logged_in' => false);
}

// Devolver la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
