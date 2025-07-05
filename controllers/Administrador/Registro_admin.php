<?php
include "../../models/administradores.php";


$usuario = new usuarios();

//$respuesta = $usuario->RegistrarAdmin( $_POST["nombre_usuario"], $_POST["password"] );


if ($respuesta === true) {
    echo '
    <script>
        alert("Usuario actualizado correctamente.");
        location.href = "../../views/Consulta_usuarios/Consulta_usuario.php";
    </script>';
} else {
    echo '
    <script>
        alert("No se pudo actualizar el usuario. Intente nuevamente.");
        location.href = "../../views/Consulta_usuarios/Consulta_usuario.php";
    </script>';
}
?>

// Crear instancia del modelo
$admin = new administradores();

// Registrar administrador
$respuesta = $admin->RegistrarAdmin($_POST["Nombre_usuario"], $_POST["email"], $_POST["password"]);

if ($respuesta === true) {
    echo "
        <script>
            alert('Administrador registrado correctamente.');
            location.href='../../views/dashboard/Dashboardd.php'; // O donde tú quieras volver
        </script>
    ";
} else {
    echo "
        <script>
            alert('No se pudo registrar el administrador. Intente nuevamente.');
            location.href='../../views/dashboard/Dashboardd.php'; // O a un formulario de registro
        </script>
    ";
}
?>
