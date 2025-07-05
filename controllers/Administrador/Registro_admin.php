<<<<<<< HEAD
<?php
=======
 <?php
// Incluye el modelo de administradores
>>>>>>> a30a0d13a0daa02a933a3fd0aa109dcbf758e2fd
include "../../models/administradores.php";

// Verifica si los datos llegaron correctamente por POST
if (
    isset($_POST["Nombre_usuario"]) &&
    isset($_POST["email"]) &&
    isset($_POST["password"])
) {

    $admin = new administradores();

<<<<<<< HEAD
=======
    // Capturar los datos del formulario
>>>>>>> a30a0d13a0daa02a933a3fd0aa109dcbf758e2fd
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
} else {
    // Jaja no llegan a llegar datos
    echo "
        <script>
            alert('Faltan datos en el formulario.');
            location.href='../../../views/dashboard/Dashboardd.php';
        </script>
    ";
}
?>
