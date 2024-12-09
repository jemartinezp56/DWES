<?php

class Sesion {
    // Método estático para iniciar la sesión.
    public static function iniciar() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Establece el usuario en la sesión.
    public static function establecerUsuario($usuario) {
        $_SESSION['usuario'] = $usuario;
    }

    // Obtiene el usuario de la sesión.
    public static function obtenerUsuario() {
        return $_SESSION['usuario'] ?? null;
    }

    // Cierra la sesión.
    public static function cerrar() {
        session_destroy();
    }
}
?>
