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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #fef5dc;
      font-family: 'Poppins', sans-serif;
    }

    .form-container {
      max-width: 600px;
      margin: 40px auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0,0,0,0.15);
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
        <input type="text" class="form-control" name="category" id="category" value="<?= $prod['category'] ?>" required>
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
