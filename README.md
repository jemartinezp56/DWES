# Sistema de Gestión para un Gimnasio en PHP
Este es un sistema de gestión básico para un gimnasio, desarrollado en PHP utilizando programación orientada a objetos (POO). El sistema permite a los usuarios registrarse, iniciar sesión, gestionar clases y membresías, y ofrece diferentes funcionalidades según el rol del usuario (usuario, profesor, administrador).

# Objetivos del Proyecto
Desarrollar un sistema de autenticación y roles en PHP utilizando programación orientada a objetos.
Crear y gestionar clases para representar los usuarios y la sesión.
Implementar sesiones y cookies para mantener la autenticación del usuario durante su navegación.
Aplicar saneamiento y validación de datos para evitar vulnerabilidades de seguridad y garantizar una correcta experiencia de usuario.

# Características Principales
Registro de Usuario:Los usuarios pueden registrarse proporcionando un nombre de usuario, contraseña y rol (Usuario, Profesor, Administrador).
La contraseña debe tener 6 caracteres, combinando letras y números, y el nombre de usuario debe tener al menos 6 caracteres.

Inicio de Sesión: Los usuarios pueden iniciar sesión utilizando sus credenciales (nombre de usuario y contraseña).
Si las credenciales son correctas, el usuario se redirige a su perfil.
Las credenciales incorrectas muestran un mensaje de error.

# Gestión de Roles:

Usuario: Puede ver las clases y membresías disponibles.
Profesor: Puede gestionar las clases y ver a los usuarios asignados.
Administrador: Tiene acceso completo al sistema, incluyendo la gestión de clases, usuarios y membresías.
Cookies y Sesiones:

Se utiliza una cookie para recordar el último usuario registrado.
Las sesiones se utilizan para mantener al usuario logueado durante la navegación y ofrecer una experiencia personalizada según el rol.
Saneamiento y Validación de Datos:

Se implementan validaciones tanto en el registro como en el inicio de sesión para garantizar que los datos sean correctos y evitar vulnerabilidades de seguridad (ej. inyección de SQL, XSS).
Estructura del Proyecto
El sistema está compuesto por varios archivos PHP que implementan las funcionalidades descritas. 

A continuación se detallan los archivos más importantes:
1. index.php
Página de inicio donde los usuarios pueden elegir entre registrarse o iniciar sesión.
2. registro.php
Formulario de registro para crear un nuevo usuario. Valida que el nombre de usuario tenga al menos 6 caracteres y que la contraseña combine letras y números.
3. login.php
Formulario de inicio de sesión donde los usuarios proporcionan su nombre de usuario y contraseña.
Si las credenciales son correctas, el sistema crea una sesión y redirige al usuario a su perfil.
4. perfil.php
Página donde el usuario es redirigido después de iniciar sesión. El contenido mostrado depende del rol del usuario (Usuario, Profesor, Administrador).
5. clases.php
Página que muestra las clases disponibles en el gimnasio (por ejemplo, Zumba, Spinning, Body Combat).
6. logout.php
Cierra la sesión del usuario y redirige al formulario de inicio de sesión.
7. Sesion.php
Clase que maneja las sesiones de usuario. Permite iniciar, obtener y cerrar sesiones.
8. Usuario.php
Clase que define a un usuario, incluyendo su nombre, contraseña y rol. También contiene métodos para validar usuarios y obtener opciones según su rol.

# Flujo del Sistema
Página de inicio (index.php): El usuario tiene la opción de registrarse o iniciar sesión.
Formulario de registro (registro.php): El usuario ingresa sus datos (nombre de usuario, contraseña, rol). Se valida que el nombre de usuario tenga al menos 6 caracteres y que la contraseña contenga letras y números.
Formulario de inicio de sesión (login.php): El usuario ingresa su nombre de usuario y contraseña. Si las credenciales son correctas, el usuario es redirigido a su perfil (perfil.php).
Perfil del usuario (perfil.php): Dependiendo del rol, se muestran diferentes opciones y accesos al sistema:
Usuario: Ver clases y membresías.
Profesor: Ver clases y usuarios.
Administrador: Gestionar clases, usuarios y membresías.
Clases disponibles (clases.php): El sistema muestra las clases disponibles para que los usuarios las visualicen.
Cerrar sesión (logout.php): Cierra la sesión del usuario y lo redirige a la página de inicio de sesión.

# Validación y Seguridad
Se validan los datos del formulario de registro y inicio de sesión para asegurarse de que el nombre de usuario sea adecuado (al menos 6 caracteres) y que la contraseña combine letras y números.
Se utilizan sesiones para mantener al usuario autenticado durante su navegación.
Se utiliza una cookie para recordar el último usuario registrado, lo que mejora la experiencia del usuario.

# Instrucciones para Ejecutar el Proyecto
Sube los archivos a un servidor que soporte PHP (puede ser un servidor local con XAMPP o un servidor remoto).
Accede al archivo index.php desde tu navegador.
Regístrate como nuevo usuario o inicia sesión si ya tienes cuenta.
Dependiendo del rol que elijas durante el registro, se te mostrarán diferentes opciones en el perfil (usuario, profesor o administrador).

# Archivos del Proyecto
index.php: Página principal del sistema.
registro.php: Formulario de registro de usuarios.
login.php: Formulario de inicio de sesión.
perfil.php: Página del perfil de usuario con opciones según el rol.
clases.php: Página que muestra las clases disponibles.
logout.php: Cierra la sesión del usuario.
Sesion.php: Clase que maneja las sesiones.
Usuario.php: Clase que define a los usuarios y sus roles.
