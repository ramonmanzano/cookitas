<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    
    <?php
        echo "fruta favorita : " . $_SESSION['fruta_favorita'];
    ?>
    <br>
    <a href="1.php">Volver</a>

</body>
</html>