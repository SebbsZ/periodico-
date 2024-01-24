<?php
// Incluir el archivo de conexión a la base de datos
include('conexion.php');

// Verificar si la solicitud es de tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST["nombre"];
    $tipo_documento = $_POST["tipo_documento"];
    $numero_cedula = $_POST["numero_cedula"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $contrasena = $_POST["contrasena"];
    $confirmar_contrasena = $_POST["confirmar_contrasena"];

    // Consulta SQL para verificar si ya existe una cédula o correo en la base de datos
    $verificar_sql = "SELECT * FROM Usuarios WHERE DOCUMENTO = '$numero_cedula' OR CORREO = '$correo'";
    $resultado = $mysqli->query($verificar_sql);

    // Verificar si ya existe una cédula o correo registrado
    if ($resultado->num_rows > 0) {
        // Redirigir a la página de registro con mensaje de error
        header("Location: registro.php?error=duplicado");
        exit();
    } elseif ($contrasena !== $confirmar_contrasena) {
        // Redirigir a la página de registro con mensaje de error de contraseña
        header("Location: registro.php?error=contrasena");
        exit();
    } else {
        // Hash de la contraseña antes de almacenarla en la base de datos
        $contrasena_hashed = password_hash($contrasena, PASSWORD_DEFAULT);

        // Consulta SQL para insertar datos en la tabla Usuarios
        $insertar_sql = "INSERT INTO Usuarios (NOMBRE, DOCUMENTO, TIPO_DOCUMENTO, CORREO, TELEFONO, CONTRASENA) 
                VALUES ('$nombre', '$numero_cedula', '$tipo_documento', '$correo', '$telefono', '$contrasena_hashed')";

        // Ejecutar la consulta de inserción
        if ($mysqli->query($insertar_sql) === TRUE) {
            // Registro exitoso, redirigir a la página de inicio de sesión con mensaje de éxito
            header("Location: login.php?success=registro");
            exit();
        } else {
            // Error en la consulta de inserción, redirigir a la página de registro con mensaje de error SQL
            header("Location: registro.php?error=sql");
            exit();
        }
    }

    // Cerrar la conexión a la base de datos
    $mysqli->close();
}
?>
