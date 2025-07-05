<?php

include "../../models/administradores.php";

$admin = new administradores();{

    
    // Registrar administrador en la base de datos
    $respuesta = $admin->RegistrarAdmin($_POST["Nombre_usuario"], $_POST["email"], $_POST["password"]);

    if ($respuesta === true) {
        echo "
            <script>
                alert('Administrador registrado correctamente.');
                location.href='../../views/dashboard/Dashboardd.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('No se pudo registrar el administrador. Intente nuevamente.');
                location.href='../../../views/dashboard/Dashboardd.php';
            </script>
        ";
    }
    
}
?>
