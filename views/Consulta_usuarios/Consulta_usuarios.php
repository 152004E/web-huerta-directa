<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">    
    </script>
    <title>Huerta directa</title>
    
</head>
<body>
     <section>
        <div class="accordion" class="container-xl" id="accordionExample" class="container text-center">
            <div class="container-xl" class="accordion-item" class="row align-items-center">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Consulta de Usuarios
                </button>
                </h2>
                <div id="collapseOne" class="container-xl" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <?php
                        include "buscador_usuarios.html";
                        echo "<hr>";
                        include "../../controllers/Registro_usuario/Consulta_usuarios.php";
                    ?>
        

                </div>
                </div>
            </div>           
        </div>
    </section>
</body>
</html>