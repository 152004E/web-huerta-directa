 <?php
 
include "../../models/usuario.php";

$objeto = new usuarios();
$respuesta = $objeto->Actualizar($id_product, $_POST["nombre"],$_POST["precio"],$_POST["categoria-producto"],$_POST["descripcion"]);
if($respuesta instanceof Exception){
    if($respuesta->getCode()==23000)
    {
        echo "<script>
                alert('Numero de documento imposible de duplicar');
                location.href='../views/usuarios.php';        
        </script>";
    }
    else{
        echo "<script>
                alert('Numero de documento imposible de duplicar');        
        </script>";
    }
}
else{
    echo "<script>
                alert('Registro actualizado correctamente');
                location.href='../views/usuarios.php';        
        </script>";
}



?>