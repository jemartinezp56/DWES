<?php
// Iniciamos la sesión y destruimos los datos de la sesión para cerrar la sesión del usuario.
session_start();
session_destroy();

// Redirigimos al usuario a la página de login después de cerrar sesión.
header("Location: login.php");
exit();
?>
