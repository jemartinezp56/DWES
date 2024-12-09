<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capturamos los datos del formulario.
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['rol'];

    // Verificamos que el nombre coincida con el registrado (cookie simulada).
    if ($nombre === $_COOKIE['ultimo_usuario'] && strlen($contrasena) === 6) {
        // Creamos la sesión para el usuario.
        $_SESSION['usuario'] = $nombre;
        $_SESSION['rol'] = $rol;
        header("Location: perfil.php");
        exit();
    } else {
        $error = "Credenciales incorrectas.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre de usuario" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <select name="rol">
            <option value="usuario">Usuario</option>
            <option value="profesor">Profesor</option>
            <option value="admin">Administrador</option>
        </select>
        <button type="submit">Iniciar Sesión</button>
    </form>
    <?php if (!empty($error)) echo "<p>$error</p>"; ?>
</body>
</html>
