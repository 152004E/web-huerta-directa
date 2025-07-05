<?php

if (isset($_GET["codigo"])) {
    $id_user = $_GET["codigo"];
    include "../../models/usuarios.php";
    $usuario = new usuarios();
    $respuesta = $usuario->Eliminar($id_user);

    if ($respuesta === true) {
        echo "<script>
            window.location.href = 'Consulta_usuario.php';
        </script>";
        exit();
    } else {
        echo "<script>
            alert('❌ No se pudo eliminar el usuario.');
            window.location.href = 'Consulta_usuario.php';
        </script>";
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">    
    </script>
    <title>Huerta directa</title>
    <link
      rel="icon"
      type="image/png"
      href="../login/login/logo_huerta.png"
    />
    <!-- conexion con los estilos -->
    <link rel="stylesheet" href="style.css">
    <!-- instalacion de las fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
</head>
<body>
     <section class="consulta-container">
        <div  class="container-xl" id="accordionExample" class="container text-center">
            <div class="container-xl"  class="row align-items-center">
                <h1>
                    CONSULTA DE USUARIOS
                </h1>
                <div id="collapseOne" class="container-xl" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <?php
                        include "buscador_usuarios.html";
                        echo "<hr>";
                        include "../../controllers/Registro_usuario/Search_usuarios.php";
                    ?>
        

                </div>
                </div>
            </div>           
        </div>
    </section>
</body>
</html>