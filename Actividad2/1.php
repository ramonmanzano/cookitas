<?php
session_start();

$_SESSION['fruta_favorita'] = "Manzana";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 1 Sesiones</title>
</head>
<body>
    <p>guardado: 
     <?php 
        echo $_SESSION['fruta_favorita'];
        ?>
    </p>

    <a href="2.php">pagina 2</a>
</body>
</html>