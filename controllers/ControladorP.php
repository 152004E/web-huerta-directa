 <?php



include "../models/productos.php";



$nombreImagen = $_FILES['image_product']['name'];
$temporal = $_FILES['image_product']['tmp_name'];
$rutaDestino = "../uploads/" . $nombreImagen;

// Crear carpeta si no existe
if (!file_exists("../uploads")) {
    mkdir("../uploads", 0777, true);
}

// Mover la imagen al destino
move_uploaded_file($temporal, $rutaDestino);


$producto = new productos();

$respuesta = $producto->Registrar($_POST["nombre"], $_POST["precio"], $_POST["categoria-producto"], $nombreImagen, $_POST["descripcion"]);



if($respuesta){
    echo "<script>alert('Registro exitoso. Redirigiendo...');</script>";
    header("location:../views/DashBoard/dashboard.php");
     exit;
 
}
else{
    echo "
        <script>
            alert('Datos incorrectos, vuelva a intentar');
            location.href='../views/Agreagar_producto/Agregar_producto.html';
        </script>
    ";
}

?>





