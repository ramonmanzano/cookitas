<?php
session_start();

if(isset($_SESSION['usuario'])){
    header("Location: panel.php");
    exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    if($usuario == 'admin' && $password == '1234'){
        $_SESSION['usuario'] = 'admin';
        header("Location: panel.php");
        exit;
    } else {
        $error = "Usuario o contrasena incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Iniciar Sesion</h2>
    
    <?php 
    if(isset($error)){
        echo '<p style="color: red;">'.$error.'</p>';
    }
    ?>
    
    <form method="post">
        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>
        
        <label>Contrasena:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Entrar</button>
    </form>
</body>
</html>