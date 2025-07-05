<?php


$admin = new administradores();{



    $nombre = $_POST["Nombre_usuario"];
    $correo = $_POST["email"];
    $clave = $_POST["password"];

    // Registrar administrador en la base de datos
    $respuesta = $admin->RegistrarAdmin($nombre, $correo, $clave);

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
