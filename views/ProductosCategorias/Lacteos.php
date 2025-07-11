<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categoria Lacteos | Huerta directa</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../style.css">
  <link
     rel="icon"
     type="image/png"
     href="../login/login/logo_huerta.png" />

</head>

<body>
  <?php
  include_once(__DIR__ . '/../../models/productos.php');
  $producto = new productos();
  $productos = $producto->ConsultaEspecifica('category', 'lacteos');
  ?>


<div class="menu container1">
<?php include '../modelosFront/navPagina.php'; ?>
<?php include '../modelosFront/carritoProducto.php'; ?>
</div>
  <main class="products container1" id="lista-1">
    <h2 class="productosCatePhp" data-aos="zoom-in">Lacteos</h2>

    <div class="products-container">
      <?php foreach ($productos as $producto): ?>
        <div class="product-content" data-aos="zoom-in" data-aos-delay="100">
          <div class="product">
            <img src="../../uploads/<?php echo $producto['image_product']; ?>" alt="Imagen de <?php echo htmlspecialchars($producto['name_product']) ?>" />
            <div class="product-txt">
              <h3><?php echo htmlspecialchars($producto['name_product']) ?></h3>
              <p class="precio"><?php echo number_format($producto['price'], 0, ',', '.') ?></p>
              <div class="btnProducto">
                 <a href="#" class="agregar-carrito btn-2" data-id="1" data-aos="fade-right" data-aos-delay="400">Agregar</a>
                 <a href="#" class="btn-2" data-aos="fade-right" data-aos-delay="400">Info</a>
               </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </main>
  <?php include '../modelosFront/footer.php'; ?>
</body>

</html>