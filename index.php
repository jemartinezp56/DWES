<?php
// Incluimos el archivo de la clase 'Sesion' para manejar la sesión.
require_once 'Sesion.php';

// Iniciamos la sesión utilizando el método estático de la clase Sesion.
Sesion::iniciar();

// Obtenemos el usuario actualmente autenticado desde la sesión.
$usuario = Sesion::obtenerUsuario();

// Si el usuario ya está autenticado, lo redirigimos a la página del perfil.
if ($usuario) {
    header("Location: perfil.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenido al Sistema del Gimnasio</h1>
    <a href="registro.php">Registrarse</a> <!-- Enlace para registrarse -->
    <a href="login.php">Iniciar Sesión</a> <!-- Enlace para iniciar sesión -->
</body>
</html>
