<?php
session_start();
require_once '../models/usuarios.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['email'];
    $password = $_POST['password_user'];

    $usuarioModel = new usuarios(); // con minúscula
    $resultado = $usuarioModel->Login($correo, $password);

    if ($resultado && count($resultado) > 0) {
        // Guardar datos del usuario en sesión
        $_SESSION['usuario'] = $resultado[0];

        // Generar código 2FA
        $codigo_2fa = rand(100000, 999999);
        $_SESSION['codigo_2fa'] = $codigo_2fa;

        // Mostrar el código como simulación
        echo "<p>Código de verificación (simulación): <strong>$codigo_2fa</strong></p>";
        echo "<p>Redirigiendo a verificación...</p>";
        header('refresh:3;url=../views/Verificacion/verificar_codigo.php');
        exit();
    } else {
        echo "Correo o contraseña incorrectos.";
    }
}
?>

