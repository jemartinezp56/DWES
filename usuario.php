<?php

class Usuario {
    public $nombre;
    public $rol;
    public $contrasena;

    // Constantes para definir los roles.
    const USUARIO = 'usuario';
    const PROFESOR = 'profesor';
    const ADMIN = 'admin';

    // Constructor para inicializar el usuario con sus datos.
    public function __construct($nombre, $contrasena, $rol) {
        $this->nombre = $nombre;
        $this->contrasena = $contrasena;
        $this->rol = $rol;
    }

    // Método estático para validar si el usuario existe en la sesión.
    public static function validar($nombre, $contrasena) {
        return isset($_SESSION['usuarios'][$nombre]) &&
               $_SESSION['usuarios'][$nombre]->contrasena === $contrasena;
    }

    // Método para obtener las opciones según el rol.
    public function obtenerOpciones() {
        switch ($this->rol) {
            case self::USUARIO:
                return "Ver Membresías y Clases Disponibles";
            case self::PROFESOR:
                return "Gestionar Clases Asignadas y Ver Usuarios";
            case self::ADMIN:
                return "Administrar Gimnasio, Usuarios y Clases";
            default:
                return "Rol no reconocido";
        }
    }
}
?>
