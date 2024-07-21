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
<h1>Configuración de Seguridad del Servidor</h1>
<h2>•	Firewall:</h2>

<head> 
 Configura un firewall para restringir el tráfico a solo los puertos necesarios (por ejemplo, 80 para HTTP y 443 para HTTPS).
 <h2>•	Fail2Ban: </h2>
 Implementa herramientas como Fail2Ban para bloquear IPs después de varios intentos fallidos de inicio de sesión.
 <h2>•	Rootkit Detection:</h2>
 Utiliza herramientas para detectar rootkits, como chkrootkit o rkhunter.

</div>    
</body>
</html>