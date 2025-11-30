<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit;
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['usuario']);
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
</head>
<body>
    <h2>Panel</h2>
    <p>Usuario: <?php echo $_SESSION['usuario']; ?></p>
    <p>pagina no accesible</p>
    
    <br>
    <a href="panel.php?logout=1">Cerrar sesion</a>
</body>
</html>