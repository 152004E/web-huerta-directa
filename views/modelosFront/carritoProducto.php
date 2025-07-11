 <!DOCTYPE html>
 <html lang="es">

 <head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
   <link rel="stylesheet" href="../darkindex.css" />
   
   <!--link para el slider y css del slider-->
 



  
   <!--agregacion para los iconos-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <!--  Animacion al hacer scroll -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <!-- Link para el font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined">


 </head>
 <body>
    <style>

.ajustaCarrito{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px;
    padding-right: 10px;
    border-radius: 10px;
    background-color: #FEF5DC;
    position: fixed;
    top: 80px;
    right: 60px;
    transition: all 0.8s;
    cursor: pointer;
}
.ajustaCarrito:hover{
background-color: #496826 ;
}
            


    </style>
     <div class="ajustar">
         <ul class="ajustaCarrito">
           <li class="submenu carrito-container">
             <img class="enlace" id="icono-carrito" src="../images/car.svg" alt="carrito de compra" />
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
        
         <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   
   <!-- scrit para animaciones al scrollear -->
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
     AOS.init({
       duration: 1000, // duración en ms
       offset: 100, // cuándo se empieza a activar
       once: true // solo una vez por scroll
     });
   </script>
   <script src="../script.js" defer></script>
 </body>
 </html>