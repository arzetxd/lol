<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: colum.php");
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/f1.css">
</head>

<body>
    <div class="f1-box">
<a class="f1-box" href="colum.php">VOLVER</a>
<h1>Gestión de Usuarios y Acceso</h1>
<h2>•	Accesos mínimos:</h2>

<head> 
Aplica el principio de privilegio mínimo para todas las cuentas de usuario.
<h2>•	Autenticación de dos factores (2FA):</h2>
 Implementa 2FA para acceder a la administración del servidor.
<h2>•	Contraseñas seguras: </h2>
Asegúrate de que todas las cuentas usen contraseñas fuertes y complejas.

</div>
</body>
</html>