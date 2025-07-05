 <?php
// Incluye el modelo de administradores
include "../../models/administradores.php";

// Verifica si los datos llegaron correctamente por POST
if (
    isset($_POST["Nombre_usuario"]) &&
    isset($_POST["email"]) &&
    isset($_POST["password"])
) {
    // Crear instancia del modelo
    $admin = new administradores();

    // Capturar los datos del formulario
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
                location.href='../../views/dashboard/Dashboardd.php';
            </script>
        ";
    }
} else {
    // Si no llegan todos los datos esperados
    echo "
        <script>
            alert('Faltan datos en el formulario.');
            location.href='../../views/dashboard/Dashboardd.php';
        </script>
    ";
}
?>
