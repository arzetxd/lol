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
<h1>Auditoría y Registro</h1>
<h2>•   Logs:</h2>
<head> 
Configura el servidor para registrar todos los eventos importantes y accede a los logs regularmente.
<h2>•	Auditoría de seguridad:</h2>
Realiza auditorías de seguridad periódicas para identificar y corregir vulnerabilidades.

</body>
</html>