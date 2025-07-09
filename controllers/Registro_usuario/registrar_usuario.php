<?php

//var_dump($_POST);

include "../../models/usuarios.php";

//var_dump($_POST);


$usuario = new usuarios();
$respuesta = $usuario->Registrar($_POST["Nombre_usuario"],$_POST["email"], $_POST["password"]);

/*
if ($respuesta === true) {
    echo "Registrado correctamente";
} else {
    echo "Fallo en el registro";
    var_dump($respuesta); // Para ver si hay un error
}
*/

if($respuesta instanceof Exception){
    header("location:../views/Errores/error500.html");
}
else if($respuesta == true){
 header("location:../../views/index.php");
    
   
}
else{
    echo "
        <script>
            alert('Datos incorrectos, vuelva a intentar');
            location.href='../views/login/login/pagina.html';
        </script>
    ";
}

?>