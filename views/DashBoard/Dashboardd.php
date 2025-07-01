<?php
include "../../models/productos.php";
$producto = new productos();
$productos = $producto->ObtenerTodos();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Link para el font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined">
    <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="Dashboarddd.css">

</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../images/logo.png" alt="Logo">
                    <h2 class="text-muted">Huerta<span class="danger">Directa</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#">
                    <span class="material-symbols-outlined">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#" >
                    <span class="material-symbols-outlined">person</span>
                    <h3>Clientes</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">receipt_long</span>
                    <h3>Ordenes</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">finance_mode</span>
                    <h3>Reportes</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">mail</span>
                    <h3>Mensajes</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">inventory</span>
                    <h3>Productos</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">report</span>
                    <h3>Reportes</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">settings</span>
                    <h3>Configuracion</h3>
                </a>
                <a href="../Consulta_usuarios/Consulta_usuarios.php">
                    <span class="material-symbols-outlined">add</span>
                    <h3>Consultar Usuario</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- fin del asside -->
        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <input type="date">
            </div>

            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-outlined">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Ventas</h3>
                            <h1>$25,000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Ultimas 24 horas</small>
                </div>
                <!---FIN DE VENTAS--->
                <div class="expenses">
                    <span class="material-symbols-outlined">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Gastos</h3>
                            <h1>$15,567</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Ultimas 24 horas</small>
                </div>
                <!---FIN DE GASTOS--->
                <div class="income">
                    <span class="material-symbols-outlined">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Ingresos</h3>
                            <h1>$10,240</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>31%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Ultimas 24 horas</small>
                </div>
                <!---FIN DE INGRESOS--->
            </div>
            <!---------- fin de insights ------------->

            <div class="recent-orders">
                <h2>Ordenes recientes</h2>
                <table>
                    <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Categoria</th>
                        <th>Estado</th>
                        <th>Precio</th>
                        <th class="acciones">Acciones</th>
                    </tr>
                    </thead>
                        <tbody>
                            <?php foreach ($productos as $producto): ?>
                                <tr>
                                    <td><?= htmlspecialchars($producto['name_product']) ?></td>
                                    <td><?= htmlspecialchars($producto['category']) ?></td>
                                    <td><span class="status delivered">Disponible</span></td>
                                    <td>$<?= number_format($producto['price'], 2) ?></td>
                                    <td class="acciones">
                                    <a href="../../controllers/eliminar_producto.php?id=<?= $producto['id_product'] ?>" class="btn-delete" onclick="return confirm('¿Eliminar este producto?')">❌</a>
                                    <a href="../Actualizar_producto/form_actualizar_producto.php?id=<?= $producto['id_product'] ?>" class="btn-edit">✏️</a>
                                </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                </table>
                <a href="#">Mostrar todo</a>
            </div>

        </main>
        <!--FIN DEL MAIN 😜😝🤤-->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-outlined">dehaze</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-outlined active">light_mode</span>
                    <span class="material-symbols-outlined">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Ey, <b>Santiago</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="imagesDashBoard/Santiago.png" alt="">
                    </div>
                </div>
            </div>
            <!--FIN DEL TOP-->
            <div class="recent-updates">
                <h2>Actualizaciones</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="imagesDashBoard/Emerson.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>Emerson</b> recibio su orden de una yuca</p>
                            <small class="text-muted">Hace 4 horas</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="imagesDashBoard/Jesus.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>Jesus</b> recibio su orden de una manzana</p>
                            <small class="text-muted">Hace 6 horas</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="imagesDashBoard/img1.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Rigoberto</b> recibio su orden de un Combo super</p>
                            <small class="text-muted">Hace 9 horas</small>
                        </div>
                    </div>
                </div>
            </div>
            <!--FIN DE LAS ACTUALIZACIONES MY BROTA-->
            <div class="sales-analytics">
                <h2>Analiticas</h2>
                <div class="item online">
                   <div class="icon">
                        <span class="material-symbols-outlined">shopping_cart</span>
                   </div> 
                   <div class="right">
                        <div class="info">
                            <h3>ORDENES</h3>
                            <small class="text-muted">Ultimas 24 horas</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3849</h3>
                   </div>
                </div>
                <div class="item offline">
                   <div class="icon">
                        <span class="material-symbols-outlined">local_mall</span>
                   </div> 
                   <div class="right">
                        <div class="info">
                            <h3>OFFLINE ORDENES</h3>
                            <small class="text-muted">Ultimas 24 horas</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>1100</h3>
                   </div>
                </div>
                <div class="item customers">
                   <div class="icon">
                        <span class="material-symbols-outlined">person</span>
                   </div> 
                   <div class="right">
                        <div class="info">
                            <h3>NUEVOS CLIENTES</h3>
                            <small class="text-muted">Ultimas 24 horas</small>
                        </div>
                        <h5 class="success">+67%</h5>
                        <h3>849</h3>
                   </div>
                </div>
                <div class="item add-client">
                    <div>
                        <span class="material-symbols-outlined">add</span>
                        <h3>Añadir cliente</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="dashboar.js"></script>
</body>
</html>