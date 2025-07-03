<?php

//var_dump($_POST);

include "../models/usuarios.php";

//var_dump($_POST);


$usuario = new usuarios();
$respuesta = $usuario->Login($_POST["email"], $_POST["password_user"]);

//Var_dump($respuesta);

if($respuesta instanceof Exception){
    header("location:../views/Errores/error500.html");
}
<<<<<<< HEAD:controllers/registrar_usuario.php
else if($respuesta == true){
 header("location:../../views/Consulta_usuarios/Consulta_usuarios.php");
    
   
=======
else if(!empty($respuesta)){
    if($respuesta[0]["fk_id_role"]=="1"){
        header("location:../views/DashBoard/dashboard.html");
    }
    else if ($respuesta[0]["fk_id_role"]=="2"){
        header("location:../views/index.html");
    }
>>>>>>> 4c7e796c6f78f8a91a84fd8efee973a87f5c6b39:web-huerta-directa/controllers/controlador.php
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
