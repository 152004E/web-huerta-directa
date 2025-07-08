<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categoria productos Organicos || Huerta directa</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../style.css">

</head>

<body>
  <?php
  include_once(__DIR__ . '/../../models/productos.php');
  $producto = new productos();
  $productos = $producto->ConsultaEspecifica('category', 'Frutas');
  ?>



  <main class="products container1" id="lista-1">
    <h2 data-aos="zoom-in">Productos Organicos</h2>

    <div class="products-container">
      <?php foreach ($productos as $producto): ?>
        <div class="product-content" data-aos="zoom-in" data-aos-delay="100">
          <div class="product">
            <img src="../../uploads/<?php echo $producto['image_product']; ?>" alt="Imagen de <?php echo htmlspecialchars($producto['name_product']) ?>" />
            <div class="product-txt">
              <h3><?php echo htmlspecialchars($producto['name_product']) ?></h3>
              <p class="precio"><?php echo number_format($producto['price'], 0, ',', '.') ?></p>
              <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </main>
</body>

</html>