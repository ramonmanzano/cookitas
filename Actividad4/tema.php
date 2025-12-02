<?php
if(isset($_POST['tema'])){
    $tema = $_POST['tema'];
    setcookie('galleta_gorda', $tema, time() + 3600);
    header("Location: tema.php");
    exit;
}

if(isset($_COOKIE['galleta_gorda'])){
    $tema_actual = $_COOKIE['galleta_gorda'];
} else {
    $tema_actual = 'claro';
}

if($tema_actual == 'claro'){
    $clase_body = 'claro';
} else {
    $clase_body = 'oscuro';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Selector de Tema</title>
    <style>
        body.claro {
            background: white;
            color: black;
        }
        body.oscuro {
            background: black;
            color: white;
        }
    </style>
</head>
<body class="<?php echo $clase_body; ?>">
    <h1>Selector de Tema</h1>
    <form method="post">
        <select name="tema">
            <option value="claro">Modo Claro</option>
            <option value="oscuro">Modo Oscuro</option>
        </select>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>