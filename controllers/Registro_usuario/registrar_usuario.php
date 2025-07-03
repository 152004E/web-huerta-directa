<?php

include "../models/usuarios.php";

$usuario = new usuarios();

// Registrar como Cliente por defecto (fk_id_role = 2)
$respuesta = $usuario->Registrar(2, $_POST["Nombre_usuario"], $_POST["email"], $_POST["password"]);

if ($respuesta instanceof Exception) {
    header("location:../views/Errores/error500.html");
} 
else if ($respuesta === true) {

    session_start();

    // Obtener datos del usuario recién registrado
    $datos = $usuario->ObtenerPorEmail($_POST["email"]);

    if ($datos) {
        $_SESSION["usuario"] = $datos["name_user"];
        $_SESSION["perfil"] = $datos["id_role"]; // Guardamos el ID de rol

        // Redirige según el ID del rol
        if ($datos["id_role"] == 2) {
            // Cliente
            header("location:../views/index.html");
        } else {
            // Administrador
            header("location:../views/dashboard/Dashboard.html");
        }

    } else {
        echo "
            <script>
                alert('No se pudo validar el usuario');
                location.href='../views/login/login/pagina.html';
            </script>
        ";
    }

} 
else {
    echo "
        <script>
            alert('Datos incorrectos, vuelva a intentar');
            location.href='../views/login/login/pagina.html';
        </script>
    ";
}

?>
