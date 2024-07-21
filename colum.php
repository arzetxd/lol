<?php
session_start();
if (!isset($_SESSION['username'])) {
    
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard en PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-20 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                        Configuración del servidor web apache
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="f1.php">
                        1. Actualización y Mantenimiento del Servidor
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="f2.php">
                        2. Configuración del Servidor Web

                        </a>
                        <li class="nav-item">
                        <a class="nav-link" href="f3.php">
                        3. Seguridad de Aplicaciones Web
                        </a>
                        <li class="nav-item">
                        <a class="nav-link" href="f4.php">
                        4. Configuración de Seguridad del Servidor
                        </a>
                        <li class="nav-item">
                        <a class="nav-link" href="f5.php">
                        5. Gestión de Usuarios y Acceso
                        </a>
                        
                        <li class="nav-item">
                        <a class="nav-link" href="f6.php">
                        6. Auditoría y Registro
                        
                        </a>
                        <li class="nav-item">
                        <a class="nav-link" href="f7.php">
                        7. Prevención y Respuesta a Incidentes

                        </a>
                        <li class="nav-item">
                        <a class="nav-link" href="f8">
                        Soluciones de Seguridad Web

                        </a>
                        <li class="nav-item">
<a href="logout.php"><button type="text" >Salir</a>
<a href="welcome.php"><button type="text" >BIENVENIDOs</a>
</li>
                        
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main" class="col-md-200 ml-sm-auto col-lg-9 px-15">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-10 font-weight-normal">INTRODUCCION</h4>
                        </div>
                        <div class="card-body">
                            <p>Configurar los parámetros principales de seguridad en un servidor web implica 
                            varias acciones destinadas a proteger tanto el servidor como los datos que maneja. 
                            Aquí te dejo una lista con las uraciones y soluciones más importantes:</p>
                        </div>
                    </div>
                </div>
                

</body>
</html>
   
   

