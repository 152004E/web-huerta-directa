
<?php
session_start();

if (!isset($_SESSION['usuario']) || !isset($_SESSION['codigo_2fa'])) {
    header("Location: Dashboard/Dashboardd.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo_ingresado = $_POST['codigo'];

    if ($codigo_ingresado == $_SESSION['codigo_2fa']) {
        // Código correcto: redirigir al dashboard
        unset($_SESSION['codigo_2fa']);
        header("Location: DashBoard/Dashboardd.php");
        exit();
    } else {
        $error = "Código incorrecto. Intenta de nuevo.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificación 2FA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Verificación en dos pasos</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post">
        <label for="codigo">Ingresa el código de verificación:</label><br>
        <input type="text" name="codigo" maxlength="6" required><br><br>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>
