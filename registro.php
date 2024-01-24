<?php
// Incluir el archivo de conexión
include('conexion.php');

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST['nombre'];
    $tipoDocumento = $_POST['tipo_documento'];
    $numeroCedula = $_POST['numero_cedula'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $contrasena = $_POST['contrasena'];
    $confirmarContrasena = $_POST['confirmar_contrasena'];

    // Verificar si las contraseñas coinciden
    if ($contrasena == $confirmarContrasena) {
        // Preparar la consulta SQL para insertar datos
        $contrasenaHash = password_hash($contrasena, PASSWORD_DEFAULT);
        $sql = "INSERT INTO Usuarios (NOMBRE, TIPO_DOCUMENTO, DOCUMENTO, CORREO, TELEFONO, CONTRASENA) 
                VALUES ('$nombre', '$tipoDocumento', '$numeroCedula', '$correo', '$telefono', '$contrasenaHash')";

        // Ejecutar la consulta
        if ($mysqli->query($sql) === TRUE) {
            echo "Registro exitoso";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    } else {
        echo "Las contraseñas no coinciden";
    }

    // Cerrar la conexión
    $mysqli->close();
}
?>



<!DOCTYPE html>
<html lang="es-ES" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <title>Q'hubo - El periódico más leído de Colombia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">

    <link rel="stylesheet" href="estilos/styles.css">
    <link rel="stylesheet" href="estilos/styles2.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">


</head>

<body class="home blog wpb-js-composer js-comp-ver-4.8.1 vc_responsive">
    <div class="wrapper">
        <div class="content-wrap">
            <header id="encabezado">
                <div class="contenedor-header">
                    <div class="logo">
                         <a href="index.php"><h1>Q'hubo</h1><img src="imagenes/logo.png" alt="Logo Q'hubo"></a>
                    </div>
                </div>
            </header>

            <!-- Formulario de Registro -->
            <h2>Registro de Usuario</h2>
            <?php
            // Mostrar mensajes de error o éxito
            if (isset($_GET['error'])) {
                echo '<label class="error-message">';
                if ($_GET['error'] === 'duplicado') {
                    echo 'Ya existe un usuario con esta cédula o correo. Por favor, verifica tus datos.';
                } elseif ($_GET['error'] === 'contrasena') {
                    echo 'Las contraseñas no coinciden. Por favor, inténtalo de nuevo.';
                } elseif ($_GET['error'] === 'sql') {
                    echo 'Error en el registro. Por favor, intenta nuevamente.';
                }
                echo '</label>';
            } elseif (isset($_GET['success']) && $_GET['success'] === 'true') {
                echo '<label class="success-message">Registro exitoso. ¡Bienvenido!</label>';
            }
            ?>

            <form method="post" action="procesar_registro.php">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>

                <label for="tipo_documento">Tipo de Documento:</label>
                <select name="tipo_documento" required>
                    <option value="cedula_ciudadania">Cédula de Ciudadanía</option>
                    <option value="cedula_extranjeria">Cédula de Extranjería</option>
                    <option value="tarjeta_identidad">Tarjeta Identidad</option>
                </select>

                <label for="numero_cedula">Número de Cédula:</label>
                <input type="text" name="numero_cedula" required>

                <label for="correo">Correo:</label>
                <input type="email" name="correo" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" name="telefono" required>

                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" required>

                <label for="confirmar_contrasena">Confirmar Contraseña:</label>
                <input type="password" name="confirmar_contrasena" required>

                <input type="submit" value="Registrarse">
            </form>

            
            <a class="login-link" href="login.php">¿Ya estás registrado? Inicia sesión aquí.</a>
            <br>
            <a href="index.php" class="volver-button">Volver</a>
            br
        </div>
    </div>
</body>
</html>
