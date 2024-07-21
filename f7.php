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
<h1>Prevención y Respuesta a Incidentes</h1>
<h2>•	Plan de respuesta a incidentes: </h2>
<head>
Diseña e implementa un plan para responder a incidentes de seguridad.
<h2>•	Backups regulares:</h2>
 Realiza copias de seguridad de los datos de forma regular y asegúrate de que los backups estén protegidos y accesibles solo para usuarios autorizados.

</div>

</body>
</html>