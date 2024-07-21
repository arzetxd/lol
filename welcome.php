<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    header("Location: colum.php");
    
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
<h1></h1>

</body>
<body>
<div class="btn">
        <a class="btn" href="colum.php">BIENVENIDO<br>A MI PAGINA WEB</a>
        
    </div>
    
    
</body>
</html>
