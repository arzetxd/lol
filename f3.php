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
<h1>Seguridad de Aplicaciones Web</h1>
<h2>•	Validación y sanitización de entrada:</h2>
<head> 
 Implementa validación y sanitización de todos los datos de entrada para evitar inyecciones SQL y XSS.
 <h2>•	Uso de Content Security Policy (CSP):</h2>
 Define políticas de seguridad para controlar recursos que el navegador puede cargar.
 <h2>•	Protección contra Cross-Site Request Forgery (CSRF): </h2>
Utiliza tokens CSRF para proteger formularios y solicitudes sensibles.

</div>
</head>
    
</body>
</html>