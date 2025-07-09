<?php

//var_dump($_POST);

include "../models/usuarios.php";

///var_dump($_POST);


$usuario = new usuarios();
$respuesta = $usuario->Login($_POST["email"], $_POST["password_user"]);

//Var_dump($respuesta);

if($respuesta instanceof Exception){
    header("location:../views/Errores/error500.html");
}
else if(!empty($respuesta)){
    session_start();  
    if($respuesta[0]["fk_id_role"]=="1"){
        header("location:../views/dashboard/dashboardd.php");
    }
    else if ($respuesta[0]["fk_id_role"]=="2"){
        header("location:../views/index.php");
    }
}
else{
    echo "
        <script>
            alert('Datos incorrectos, vuelva a intentar');
            location.href='../views/login/login/Log in.html';
        </script>
    ";
}

?>
