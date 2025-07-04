<?php
session_start();
if (!isset($_SESSION["perfil"]) || $_SESSION["perfil"] != 1) {
    header("location:../Errores/error403.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Administrador</title>
    <link rel="stylesheet" href="../dashboard/Dashboarddd.css">
</head>
<body>
    <h2>Registrar nuevo administrador</h2>

    <form action="../../../controllers/Administrador/registro_admin.php" method="POST">
        <label for="Nombre_usuario">Nombre:</label>
        <input type="text" name="Nombre_usuario" required><br><br>

        <label for="email">Correo:</label>
        <input type="email" name="email" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Registrar administrador</button>
    </form>

    <br>
    <a href="../dashboard/Dashboardd.php">Volver al Dashboard</a>
</body>
</html>
