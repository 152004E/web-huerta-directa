 <!DOCTYPE html>
 <html lang="es">

 <head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Huerta directa</title>
   <link rel="stylesheet" href="style.css" />
   <link rel="stylesheet" href="darkindex.css" />
   <link
     rel="icon"
     type="image/png"
     href="login/login/logo_huerta.png" />
   <!--link para el slider y css del slider-->
   <link
     rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



   <link rel="stylesheet" href="slider.css" />
   <!--agregacion para los iconos-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <!--  Animacion al hacer scroll -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <!-- Link para el font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined">


 </head>

 <body>
   <header class="header">
     <div class="menu container1">
       <a href="#" class="logo">Huerta directa</a>
       <input type="checkbox" id="menu" />
       <label for="menu">
         <img src="images/menu.png" class="menu-icon" alt="menu" />
       </label>
       <nav class="navbar">
         <ul class="nav-menu">
           <li class="dropdown">
             <a href="">Log in ▾</a>
             <ul class="dropdown-menu">
               <li><a href="../views/login/login/Log in.html ">📲 Iniciar Sesion</a></li>
               <li><a href="../views/DashBoard/Dashboardd.php">📲 Dashboard</a></li>
             </ul>
           </li>
           <li class="dropdown">
             <a href="">Servicios ▾</a>
             <ul class="dropdown-menu">
               <li><a href="Errores/error404.html">🚚 Entrega a domicilio</a></li>
               <li><a href="Errores/error404.html">📦 Venta al por mayor</a></li>
               <li><a href="Errores/error404.html">🌱 Asesoría agrícola</a></li>
             </ul>
           </li>
           <li><a href="#categorias">Categorias</a></li>
           <li class="dropdown">
             <a href="">Conocenos ▾</a>
             <ul class="dropdown-menu">
               <li><a href="./pagina_principal/landing.html">🔗 Unete</a></li>
               <li><a href="Quienes_somos/quienes_somos.html">🔎 Quienes somos</a></li>
               <li><a href="Errores/error500.html">🎛️ Contactanos</a></li>
             </ul>
           </li>
           <li><a href="#lista-1">Productos</a></li>
         </ul>
       </nav>
       <div class="agragar_producto">
         <a class="Producto btn-2 " href="./Agreagar_producto/Agregar_producto.html">Agregar <br> Producto</a>


       </div>
       <div class="ajustar">
         <ul class="ajustaCarrito">
           <li class="submenu carrito-container">
             <img class="enlace" id="icono-carrito" src="images/car.svg" alt="carrito de compra" />
             <div id="carrito" class="dropdown-carrito">
               <table id="lista-carrito">
                 <thead>
                   <tr>
                     <th>Imagen</th>
                     <th>Nombre</th>
                     <th>Precio</th>
                     <th></th>
                   </tr>
                 </thead>
                 <tbody></tbody>
               </table>
               <a href="#" id="vaciar-carrito" class="btn-2">Vaciar carrito</a>
               <a href="#" id="miBoton" class="btn-2">Ir a pagar</a>
             </div>
           </li>
         </ul>
         <div class="theme-toggler">
           <span class="material-symbols-outlined active">light_mode</span>
           <span class="material-symbols-outlined">dark_mode</span>
         </div>

       </div>

     </div>
     <div class="header-content container1">
       <div class="header-txt">
         <h1>Frutas y verduras</h1>
         <p>
           En Huerta Directa, te conectamos con productos campesinos frescos y
           de calidad, cosechados directamente por manos locales. Disfruta de
           alimentos 100% naturales, sin intermediarios y al mejor precio.
           ¡Comer sano y apoyar al campo nunca fue tan fácil!
         </p>
         <a href="../views/Quienes_somos/quienes_somos.html" class="btn-1">Informacion</a>
       </div>
       <!--  <div class="header-img">
         <img class="imagen-hover" src="images/rigth.png" alt="" />
       </div>  -->

       <div class="header-img">
         <div class="imagen-hover-container">
           <img class="front" src="images/rigth.png" alt="imagen original" />
           <img class="back" src="images/ImagenHover-modified.png" alt="imagen al hacer hover" />
         </div>
       </div>


     </div>
   </header>
   <section class="information container1">
     <div class="information-content">
       <div class="information-1">
         <img src="images/i1.svg" alt="" />
         <h3>Venta directa</h3>
         <p>Del campo a tu mesa, sin intermediarios.</p>
       </div>
       <div class="information-1">
         <img src="images/i2.svg" alt="" />
         <h3>Pagos seguros</h3>
         <p>Compra fácil y con confianza.</p>
       </div>
       <div class="information-1">
         <img src="images/i3.svg" alt="" />
         <h3>Entrega a domicilio</h3>
         <p>Recibe fresco y rápido.</p>
       </div>
     </div>
   </section>

   <!--ofertas section-->
   <section class="oferts container1">
     <div class="ofert">
       <img src="images/f1.png" alt="" />
       <h3>oferta</h3>
       <p>Premium</p>
     </div>
     <div class="ofert">
       <img src="images/f2.png" alt="" />
       <h3>oferta</h3>
       <p>Premium</p>
     </div>
     <div class="ofert">
       <img src="images/f3.png" alt="" />
       <h3>oferta</h3>
       <p>Premium</p>
     </div>
     <div class="ofert">
       <img src="images/f4.png" alt="" />
       <h3>oferta</h3>
       <p>Premium</p>
     </div>
   </section>

   <section class="slider-section">
     <!-- carrusel-jesus,santiago -->
     <div class="slider">
       <div class="container1">
         <div class="wrapper">
           <div class="myslider swiper">
             <div class="swiper-wrapper">
               <div class="swiper-slide">
                 <div class="item">
                   <div class="image object-cover">
                     <img src="images/1.png" alt="" />
                   </div>
                   <div class="text-content flexcol">
                     <h4>Frutas Premium</h4>
                     <h2>
                       <span>Del campo a tu casa</span><br /><strong>Las más frescas del mercado</strong>
                     </h2>
                     <a href="#" class="primary-button">Ver Mas</a>
                   </div>
                 </div>
               </div>
               <div class="swiper-slide">
                 <div class="item">
                   <div class="image object-cover">
                     <img src="images/pr4.png" alt="" />
                   </div>
                   <div class="text-content flexcol">
                     <h4>Fruta Fresca</h4>
                     <h2>
                       <span>Recién Cosechada</span><br /><strong>Productos de calidad</strong>
                     </h2>
                     <a href="#" class="primary-button">Ver Más</a>
                   </div>
                 </div>
               </div>
               <div class="swiper-slide">
                 <div class="item">
                   <div class="image object-cover">
                     <img src="images/pr5.png" alt="" />
                   </div>
                   <div class="text-content flexcol">
                     <h4>Frutas seleccionadas</h4>
                     <h2>
                       <span>La mejor cosecha</span><br /><strong>Agro Colombiano
                       </strong>
                     </h2>
                     <a href="#" class="primary-button">Ver Más</a>
                   </div>
                 </div>
               </div>
               <div class="swiper-slide">
                 <div class="item">
                   <div class="image object-cover">
                     <img src="images/pr6.png" alt="" />
                   </div>
                   <div class="text-content flexcol">
                     <h4>100% con amor</h4>
                     <h2>
                       <span>De la mejor calidad</span><br /><strong>De la huerta, Directo a tu casa</strong>
                     </h2>
                     <a href="#" class="primary-button">Ver Más</a>
                   </div>
                 </div>
               </div>
             </div>
             <div class="swiper-pagination"></div>
           </div>
         </div>
       </div>
     </div>
   </section>

   <?php include '../controllers/productos_pagina.php'; ?>


   <main class="products container1" id="lista-1">
     <h2 data-aos="zoom-in">Productos destacados</h2>

     <div class="products-container">
       <?php foreach ($productos as $producto): ?>
         <div data-aos="zoom-in" data-aos-delay="100">
           <div class="product">
             <img src="../uploads/<?php echo $producto['image_product']; ?>" alt="Imagen de <?php echo htmlspecialchars($producto['name_product']) ?>" />
             <div class="product-txt">
               <h3><?php echo htmlspecialchars($producto['name_product']) ?></h3>
               <p class="precio"><?php echo number_format($producto['price'], 0, ',', '.') ?></p>
               <div class="btnProducto">
                 <a href="#" class="agregar-carrito btn-2" >Agregar</a>
                 <a href="#" class="btn-2" data-aos="fade-right" data-aos-delay="400">Info</a>
               </div>

             </div>
           </div>
         </div>
       <?php endforeach; ?>
     </div>
   </main>


   <!--Ctegorias-->
   <section class="categories" id="categorias">
     <div class="container container1 categories__container">
       <div class="categories__left">
         <h1 data-aos="fade-right">Categorias</h1>
         <p data-aos="fade-right" data-aos-delay="200">
           Los productos de mejor calidad y mas frecos del mercado, de la granja a tu mesa.
           Explora tu producto favorito en la cateogoria indicada, y descubre los maravillosos precios que maneja el campo para tu bolsillo 🤩🤩🤩
         </p>
         <a href="#" class="btn-2" data-aos="fade-right" data-aos-delay="400">Saber más</a>
       </div>

       <div class="categories__right">

         <!--primer categoria de productos-->

         <a href="ProductosCategorias/Frutas.php">
           <article class="category" data-aos="zoom-in" data-aos-delay="100" href="./Productos/Frutas.php">
             <span class="category__icon green2"><i class="fa-solid fa-apple-whole"></i></span>
             <h5>Frutas</h5>
           </article>
         </a>
         <!--Segunda categoria de productos-->

         <a href="ProductosCategorias/VerdurasYHortalizas.php">
           <article class="category" data-aos="zoom-in" data-aos-delay="200">
             <span class="category__icon green"><i class="fa-solid fa-carrot"></i></span>
             <h5>Verduras Y hortalizas</h5>
           </article>
         </a>

         <!--tercera categoria de productos-->


         <a href="ProductosCategorias/Lacteos.php">
           <article class="category" data-aos="zoom-in" data-aos-delay="300">
             <span class="category__icon green2"><i class="fa-solid fa-cow"></i></span>
             <h5>Lacteos</h5>
           </article>
         </a>
         <!--Cuarta categoria de productos-->


         <a href="ProductosCategorias/CarnesYProteinas.php">
           <article class="category" data-aos="zoom-in" data-aos-delay="100">
             <span class="category__icon green"><i class="fa-solid fa-drumstick-bite"></i></span>
             <h5>Carnes y Proteinas</h5>
           </article>
         </a>
         <!--Quinto categoria de productos-->


         <a href="ProductosCategorias/CerealesYGranos.php">
           <article class="category" data-aos="zoom-in" data-aos-delay="200">
             <span class="category__icon green2"><i class="fa-solid fa-bowl-food"></i></span>
             <h5>Cereales y granos</h5>
           </article>
         </a>
         <!--Sexta categoria de productos-->

         <a href="ProductosCategorias/Organicos.php">
           <article class="category" data-aos="zoom-in" data-aos-delay="300">
             <span class="category__icon green"><i class="fa-solid fa-cookie"></i></span>
             <h5>Productos organicos</h5>
           </article>
         </a>
         <!--Setmima categoria de productos-->


         <a href="ProductosCategorias/MielYDerivados.php">
           <article class="category" data-aos="zoom-in" data-aos-delay="100">
             <span class="category__icon green2"><i class="fa-solid fa-plate-wheat"></i></span>
             <h5>Miel y derivados</h5>
           </article>
         </a>
         <!--Octava categoria de productos-->

         <a href="ProductosCategorias/BebidasNaturales.php">
           <article class="category" data-aos="zoom-in" data-aos-delay="200">
             <span class="category__icon green"><i class="fa-solid fa-glass-water"></i></span>
             <h5>Bebidas naturales</h5>
           </article>
         </a>

         <!--Novena categoria de productos-->


         <a href="ProductosCategorias/CajasMixtas.php">
           <article class="category" data-aos="zoom-in" data-aos-delay="300">
             <span class="category__icon green2"><i class="fa-solid fa-box-open"></i></span>
             <h5>Cajas mixtas o combos</h5>
           </article>
         </a>

       </div>
     </div>

   </section>



   <footer
     class="footer1"
     style="background-color: #8bc34a; padding: 40px 0; color: white">
     <div
       class="footer_container"
       style="
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            text-align: left;
          ">
       <div
         class="content_footer"
         style="flex: 1; min-width: 200px; margin: 10px">
         <h4>Huerta Directa</h4>
         <ul style="list-style: none; padding: 0">
           <li>
             <a href="login/login/pagina.html" style="text-decoration: none">Inicio</a>
           </li>
           <li>
             <a
               href="../views/DashBoard/dashboard.html"
               style="text-decoration: none">Servicios</a>
           </li>
           <li><a href="#" style="text-decoration: none">Nosotros</a></li>
           <li><a href="#" style="text-decoration: none">Contacto</a></li>
         </ul>
       </div>

       <div style="flex: 1; min-width: 200px; margin: 10px">
         <h4>Soporte</h4>
         <ul style="list-style: none; padding: 0">
           <li>
             <a href="#" style="text-decoration: none">Preguntas frecuentes</a>
           </li>
           <li>
             <a href="#" style="text-decoration: none">Política de privacidad</a>
           </li>
           <li>
             <a href="#" style="text-decoration: none">Términos y condiciones</a>
           </li>
           <li><a href="#" style="text-decoration: none">Ayuda</a></li>
         </ul>
       </div>

       <div style="flex: 1; min-width: 200px; margin: 10px">
         <h4>Productores</h4>
         <ul style="list-style: none; padding: 0">
           <li>
             <a href="#" style="text-decoration: none">Unirse a la red</a>
           </li>
           <li><a href="#" style="text-decoration: none">Beneficios</a></li>
           <li><a href="#" style="text-decoration: none">Testimonios</a></li>
           <li><a href="#" style="text-decoration: none">Capacitación</a></li>
         </ul>
       </div>

       <div style="flex: 1; min-width: 200px; margin: 10px">
         <h4>Contáctanos</h4>
         <ul style="list-style: none; padding: 0">
           <li>Email: contacto@huertadirecta.com</li>
           <li>Tel: +57 300 000 0000</li>
           <li>WhatsApp</li>
           <li>Redes sociales</li>
         </ul>
       </div>
     </div>
   </footer>
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <script src="script.js"></script>
   <!-- scrit para animaciones al scrollear -->
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
     AOS.init({
       duration: 1000, // duración en ms
       offset: 100, // cuándo se empieza a activar
       once: true // solo una vez por scroll
     });
   </script>
 </body>

 </html>