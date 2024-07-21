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
<h1>Actualización y Mantenimiento del Servidor</h1>
<h2>•	Actualizar software y sistema operativo:</h2>
<head> Mantén siempre el sistema operativo y 
    el software del servidor actualizados para protegerte contra vulnerabilidades conocidas.
    <br><h2>•	Monitoreo y mantenimiento regular:</h2> Implementa un sistema de monitoreo para 
    detectar actividad sospechosa y realiza mantenimientos periódicos.
</div>
</head>
    
</body>
</html>