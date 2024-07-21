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
<h1>Configuración del Servidor Web</h1>
<h2>•	Configurar HTTPS:</h2>
<head> 
 Utiliza certificados SSL/TLS para cifrar las comunicaciones entre el servidor y los clientes.
 <h2>Deshabilitar protocolos y ciphers inseguros: </h2>
•	Configura el servidor para deshabilitar SSLv3, TLSv1.0 y ciphers débiles.
<h2>•	Configurar HTTP Strict Transport Security (HSTS):</h2>
 Obliga a los navegadores a usar conexiones HTTPS.

</div>
</head>
    
</body>
</html>