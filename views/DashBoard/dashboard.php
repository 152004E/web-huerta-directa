<?php
include "../../models/productos.php";
$producto = new productos();
$productos = $producto->ObtenerTodos();
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DashBoard User</title>
  <link rel="stylesheet" href="dashboard.css" />
  <link rel="icon" type="image/png" href="../images/logo.png" />
  <link
    rel="icon"
    type="image/png"
    href="../login/login/fff.css" />
</head>

<body>
  <div class="container">
    <div class="navigation">
      <ul>

        <li>
          <a href="#">
            <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
            <span class="titulo">Emerson Reyes</span>
          </a>
        </li>

        <li>
          <a href="#">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            <span class="titulo">DashBoard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
            <span class="titulo">Clientes</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
            <span class="titulo">Mensajes</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
            <span class="titulo">Ayuda</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
            <span class="titulo">Ajustes</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
            <span class="titulo">Seguridad</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><ion-icon name="exit-outline"></ion-icon></span>
            <span class="titulo">Cerrar sesion</span>
          </a>
        </li>
      </ul>
    </div>
    <!--MAIN -->
    <div class="main">
      <div class="topbar">
        <div class="toggle">
          <ion-icon name="menu-outline"></ion-icon>
        </div>
        <!--Buscar-->
        <div class="search">
          <label for="">
            <input type="text" placeholder="Buscar aqui" />
            <ion-icon name="search-outline"></ion-icon>
          </label>
        </div>
        <!--imagen de usuario-->
        <div class="userImg">
          <img src="./imagesDashBoard/user.jpg" alt="user imag" />
        </div>
      </div>

      <!--Cartas de informacion-->
      <div class="cardBox">
        <div class="card">
          <div>
            <div class="numbers">2,453</div>
            <div class="cardName">Vistas totales</div>
          </div>
          <div class="iconBox">
            <ion-icon name="eye-outline"></ion-icon>
          </div>
        </div>

        <div class="card">
          <div>
            <div class="numbers">53</div>
            <div class="cardName">Ventas</div>
          </div>
          <div class="iconBox">
            <ion-icon name="cart-outline"></ion-icon>
          </div>
        </div>

        <div class="card">
          <div>
            <div class="numbers">453</div>
            <div class="cardName">Comentarios</div>
          </div>
          <div class="iconBox">
            <ion-icon name="chatbubbles-outline"></ion-icon>
          </div>
        </div>

        <div class="card">
          <div>
            <div class="numbers">$6,453</div>
            <div class="cardName">Ganancias</div>
          </div>
          <div class="iconBox">
            <ion-icon name="cash-outline"></ion-icon>
          </div>
        </div>
      </div>
      <!--TABLA DE USUARIOS-->
      <div class="details">
        <div class="recentOrders">
          <div class="cardHeader">
            <h2>Pedidos recientes</h2>
            <a href="#" class="btn">Ver todo</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>Producto</th>
                <th>Categoría</th>
                <th>Estado</th>
                <th>Precio</th>
                <th class="acciones">Acciones</th> <!-- ✅ NUEVO -->
              </tr>
            </thead>
            <tbody>
              <?php foreach ($productos as $producto): ?>
                <tr>
                  <td><?= htmlspecialchars($producto['name_product']) ?></td>
                  <td><?= htmlspecialchars($producto['category']) ?></td>
                  <td>
                    <span class="status delivered">Delivered</span> <!-- Simulado -->
                  </td>
                  <td>$<?= number_format($producto['price'], 2) ?></td>
                  <td class="acciones">
                    <a href="../../controllers/eliminar_producto.php?id=<?= $producto['id_product'] ?>" class="btn-delete" onclick="return confirm('¿Eliminar este producto?')">❌</a>
                    <a href="../Actualizar_producto/form_actualizar_producto.php?id=<?= $producto['id_product'] ?>" class="btn-edit">✏️</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <!--News customers-->
        <div class="recentCustomer">
          <div class="cardHeader">
            <h2>Clientes recientes</h2>
          </div>
          <table>
            <tr>
              <td>
                <div class="imgBx">
                  <img src="imagesDashBoard/Jesus.png" alt="user" />
                </div>
              </td>
              <td>
                <h4>Jesus <br /><span>Colombia</span></h4>
              </td>
            </tr>
            <tr>
              <td>
                <div class="imgBx">
                  <img src="imagesDashBoard/Santiago.png" alt="user" />
                </div>
              </td>
              <td>
                <h4>Santiago<br /><span>Colombia</span></h4>
              </td>
            </tr>
            <tr>
              <td>
                <div class="imgBx">
                  <img src="imagesDashBoard/Emerson.png" alt="user" />
                </div>
              </td>
              <td>
                <h4>Emerson <br /><span>Colombia</span></h4>
              </td>
            </tr>


          </table>
                <br>
          <section>
            <//button type="submit" class="btn-1">Consultar usuarios:<///button>
            <li><a href="../Consulta_usuarios/Consulta_usuarios.php">Consultar</a></li>


          </section>
        </div>
      </div>
    </div>

  </div>



  <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="dashboard.js"></script>
</body>

</html>