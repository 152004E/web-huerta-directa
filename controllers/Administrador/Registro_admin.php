<?php
include "../../models/administradores.php";

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
