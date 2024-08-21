<?php
session_start();
require 'login/funciones.php';

$select = new Select();
if (isset($_SESSION['id'])) {
    $user = $select->SelectuserByUser($_SESSION['id']);
} else {
    header('Location: index.php');
    exit; // Asegurarse de que el script se detenga después de redirigir
}

if(isset($_POST['cerrar_sesion'])) {
    require 'login/cerrarSesion.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="icon" type="image/png" href="fichamedica/historial-medico.png">
    <title>Cuenta</title>
</head>
<body>


    <h1>Bienvenido <?php echo htmlspecialchars($user['nombreCompleto']); ?> a tu cuenta</h1>
    <!-- Aquí puedes agregar el enlace para ir a la página de ficha médica -->
    <div class="todo">
        <div class="conte">
            <a class="a" href="fichamedica/Fmedica.html">Ficha Médica</a>
        </div>
        <div class="conte">
            <form method="POST">
                <button type="submit" name="cerrar_sesion" class="boton">Cerrar sesión</button>
            </form>
        </div>
    </div>
</body>
</html>
