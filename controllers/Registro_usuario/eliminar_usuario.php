<?php
include "../models/usuarios.php";

if (isset($_GET['id'])) {
    $producto = new usuarios();
    $producto->Eliminar($_GET['id']);

    // Redirigir de vuelta al dashboard
    header("Location:Consulta_usuarios/Consulta_usuario.php");
    exit;
} else {
    echo "ID de usuario no válido.";
}

?>