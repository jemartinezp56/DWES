<?php
// Incluimos las clases necesarias para manejar la sesión y el usuario.
require_once 'Usuario.php';
require_once 'Sesion.php';

// Iniciamos la sesión.
Sesion::iniciar();

// Creamos un array para almacenar los errores de validación.
$errores = [];

// Procesamos el formulario de registro si se ha enviado por POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturamos los datos del formulario.
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['rol'];

    // Validamos el nombre de usuario (debe tener al menos 6 caracteres).
    if (!preg_match('/^[a-zA-Z]{6,}$/', $nombre)) {
        $errores[] = "El nombre debe tener al menos 6 letras.";
    }

    // Validamos la contraseña (debe tener 6 caracteres, combinando letras y números).
    if (!preg_match('/^(?=.*\d)(?=.*[a-zA-Z]).{6}$/', $contrasena)) {
        $errores[] = "La contraseña debe tener 6 caracteres y combinar letras y números.";
    }

    // Si no hay errores, registramos al nuevo usuario.
    if (!$errores) {
        // Creamos una nueva instancia de la clase Usuario con los datos proporcionados.
        $nuevoUsuario = new Usuario($nombre, $contrasena, $rol);
        // Guardamos el usuario en la sesión.
        $_SESSION['usuarios'][$nombre] = $nuevoUsuario;
        // Establecemos una cookie para recordar el último usuario registrado.
        setcookie('ultimo_usuario', $nombre, time() + 3600);
        // Redirigimos a la página de login.
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <!-- Formulario de registro -->
    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre de Usuario" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <select name="rol">
            <option value="usuario">Usuario</option>
            <option value="profesor">Profesor</option>
            <option value="admin">Administrador</option>
        </select>
        <button type="submit">Registrarse</button>
    </form>
    <!-- Mostramos los errores de validación, si los hay. -->
    <?php foreach ($errores as $error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endforeach; ?>
</body>
</html>
