<?php
// Incluimos las clases necesarias para manejar la sesión y el usuario.
require_once 'Usuario.php';
require_once 'Sesion.php';

// Iniciamos la sesión para obtener la información del usuario.
Sesion::iniciar();

// Obtenemos el usuario autenticado.
$usuario = Sesion::obtenerUsuario();

// Si el usuario no está autenticado, lo redirigimos al formulario de login.
if (!$usuario) {
    header("Location: login.php");
    exit();
}

// Obtenemos las opciones para el usuario según su rol.
$opciones = $usuario->obtenerOpciones();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $usuario->nombre; ?></h1>
    <p><?php echo $opciones; ?></p> <!-- Muestra las opciones según el rol -->
    <a href="logout.php">Cerrar Sesión</a> <!-- Enlace para cerrar sesión -->
</body>
</html>
