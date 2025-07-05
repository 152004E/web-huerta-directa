<?php
include "../../models/productos.php";
$producto = new productos();
$datos = $producto->ConsultaEspecifica("id_product", $_GET["id"]);
$prod = $datos[0];
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Actualizar Producto</title>
  <link
    rel="icon"
    type="image/png"
    href="../login/login/logo_huerta.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
  <style>
    body {
      background-color: #fef5dc;
      font-family: "Poppins", sans-serif !important;
    }

    .form-container {
      max-width: 600px;
      margin: 40px auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #8dc84b;
    }

    .form-control:focus {
      box-shadow: 0 0 5px #8dc84b;
      border-color: #8dc84b;
    }

    .btn-success {
      background-color: #8dc84b;
      border: none;
    }

    .btn-success:hover {
      background-color: #6daa34;
    }
  </style>
</head>

<body>
  <div class="form-container">
    <h2>Editar Producto</h2>

    <form action="../../controllers/actualizar_producto.php" method="POST">
      <input type="hidden" name="id_product" value="<?= $prod['id_product'] ?>">

      <div class="mb-3">
        <label for="name_product" class="form-label">Nombre del producto:</label>
        <input type="text" class="form-control" name="name_product" id="name_product" value="<?= $prod['name_product'] ?>" required>
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Precio:</label>

        <input type="number" class="form-control" name="price" id="price" value="<?= $prod['price'] ?>" step="0.01" required>
      </div>

      <div class="mb-3">
        <label for="category" class="form-label">Categoría:</label>
        <select class="form-control" name="category" id="category" required>
          <option value="">Seleccione la categoría</option>
          <option value="frutas" <?= $prod['category'] == 'frutas' ? 'selected' : '' ?>>Frutas</option>
          <option value="verduras-hortalizas" <?= $prod['category'] == 'verduras-hortalizas' ? 'selected' : '' ?>>Verduras y Hortalizas</option>
          <option value="lacteos" <?= $prod['category'] == 'lacteos' ? 'selected' : '' ?>>Lácteos</option>
          <option value="carnes-proteinas" <?= $prod['category'] == 'carnes-proteinas' ? 'selected' : '' ?>>Carnes y Proteínas</option>
          <option value="cereales-granos" <?= $prod['category'] == 'cereales-granos' ? 'selected' : '' ?>>Cereales y Granos</option>
          <option value="legumbres-secas" <?= $prod['category'] == 'legumbres-secas' ? 'selected' : '' ?>>Legumbres Secas</option>
          <option value="productos-organicos" <?= $prod['category'] == 'productos-organicos' ? 'selected' : '' ?>>Productos Orgánicos</option>
          <option value="hierbas-especias" <?= $prod['category'] == 'hierbas-especias' ? 'selected' : '' ?>>Hierbas y Especias</option>
          <option value="miel-derivados" <?= $prod['category'] == 'miel-derivados' ? 'selected' : '' ?>>Miel y Derivados</option>
          <option value="procesados-artesanales" <?= $prod['category'] == 'procesados-artesanales' ? 'selected' : '' ?>>Procesados Artesanales</option>
          <option value="bebidas-naturales" <?= $prod['category'] == 'bebidas-naturales' ? 'selected' : '' ?>>Bebidas Naturales</option>
          <option value="plantas-semillas" <?= $prod['category'] == 'plantas-semillas' ? 'selected' : '' ?>>Plantas y Semillas</option>
          <option value="cajas-combos" <?= $prod['category'] == 'cajas-combos' ? 'selected' : '' ?>>Cajas o Combos</option>
          <option value="otros" <?= $prod['category'] == 'otros' ? 'selected' : '' ?>>Otros</option>
        </select>
      </div>


      <div class="mb-3">
        <label for="description_product" class="form-label">Descripción:</label>
        <textarea class="form-control" name="description_product" id="description_product" rows="4" required><?= $prod['description_product'] ?></textarea>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
      </div>
    </form>
  </div>
</body>

</html>