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
<h1>Soluciones de Seguridad Web</h1>
<h2>Web Application Firewall (WAF):</h2>
<head>
 Utiliza un WAF para proteger contra ataques comunes a aplicaciones web.
 <h2>Escaneo de vulnerabilidades:</h2>
 Implementa herramientas para escanear regularmente el servidor y las aplicaciones 
en busca de vulnerabilidades.
<h2>CAPTCHAs:</h2>
 Usa CAPTCHAs para proteger formularios contra bots y ataques automatizados.
 <h2>Seguridad de APIs:</h2>
 Protege las APIs utilizando autenticación y autorización adecuadas, 
limitando la exposición pública de endpoints y aplicando políticas de uso.


</body>
</html>