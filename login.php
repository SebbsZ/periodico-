<?php
// Incluir el archivo de conexión
include('conexion.php');

// Iniciar sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    // Consulta SQL para obtener el usuario por correo
    $sql = "SELECT * FROM Usuarios WHERE CORREO = '$correo'";
    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        // Usuario encontrado, verificar la contraseña
        $usuario = $resultado->fetch_assoc();
        if (password_verify($contrasena, $usuario["CONTRASENA"])) {
            // Contraseña válida, iniciar sesión
            $_SESSION["usuario_id"] = $usuario["ID_USUARIO"];
            $_SESSION["usuario_nombre"] = $usuario["NOMBRE"];

            // Redirigir a la página de inicio con mensaje de éxito
            header("Location: index.php?success=login");
            exit();
        } else {
            // Contraseña incorrecta, mostrar mensaje de error
            $error_message = "La contraseña ingresada es incorrecta. Por favor, inténtalo de nuevo.";
        }
    } else {
        // Usuario no encontrado, mostrar mensaje de error
        $error_message = "El correo ingresado no está registrado. Por favor, verifica tus datos.";
    }
}

// Verificar si hay un mensaje de éxito de registro
$registro_exitoso = isset($_GET['success']) && $_GET['success'] === 'registro';
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

            <!-- Formulario de Inicio de Sesión -->
            <h2>Iniciar Sesión</h2>
            <?php
            // Mostrar mensaje de error si existe
            if (isset($error_message)) {
                echo '<label class="error-message">' . $error_message . '</label>';
            }

            // Mostrar mensaje de éxito de registro
            if ($registro_exitoso) {
                echo '<label class="success-message">Registro exitoso. ¡Bienvenido!</label>';
            }
            ?>

            <form method="post" action="login.php">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" required>

                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" required>

                <input type="submit" value="Iniciar Sesión">
            </form>

            <a class="login-link" href="registro.php">¿Aún no estás registrado? Regístrate aquí.</a>
            <br>
            <a href="index.php" class="volver-button">Volver</a>
            <br>
        </div>
    </div>
</body>
</html>