<?php
include "../../models/usuarios.php";

$usuario = new usuarios();

$respuesta = $usuario->ActualizarUsuario( $_POST["id_user"], $_POST["name_user"], $_POST["password_user"]
);

if ($respuesta === true) {
    echo "<script>
        
        location.href = '../../views/Consulta_usuarios/Consulta_usuario.php';
    </script>";
} else {
    echo "<p style='color:red;'>❌ No se pudo actualizar el usuario.</p>";
    echo "<pre>DETALLE DEL ERROR:\n";
    print_r($respuesta);
    echo "</pre>";
}
?>

  

