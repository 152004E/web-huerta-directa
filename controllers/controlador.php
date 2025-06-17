<?php

//var_dump($_POST);

include "../models/usuarios.php";

$usuario = new usuarios();
$respuesta = $usuario->Login($_POST["email"], $_POST["password_user"]);

//var_dump($respuesta);

if($respuesta instanceof Exception){
    header("location:../views/Errores/error500.html");
}
else if(!empty($respuesta)){
    if($respuesta[0]["fk_id_role"]=="1"){
        header("location:../views/Dashboard/dashboard.html");
    }
    else if ($respuesta[0]["fk_id_role"]=="2"){
        header("location:../views/index.html");
    }
}
else {
    echo "
        <script>
            alert('Datos incorrectos, vuelva a intentar');
            location.href='../views/login/pagina.html';
        </script>
    ";
}
?>