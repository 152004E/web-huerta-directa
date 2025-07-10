const carrito = document.getElementById("carrito");
const elementos1 = document.getElementById("lista-1");
const lista = document.querySelector("#lista-carrito tbody");
const vaciarCarritoBtn = document.querySelector("#vaciar-carrito");

cargarEvenetListeners();

function cargarEvenetListeners() {
  elementos1.addEventListener("click", comprarElemento);
  carrito.addEventListener("click", eliminarElemento);
  if (vaciarCarritoBtn) {
    vaciarCarritoBtn.addEventListener("click", vaciarCarrito);
  }
}
function comprarElemento(e) {
  e.preventDefault();
  if (e.target.classList.contains("agregar-carrito")) {
    console.log("¡Click en botón agregar!");
    const elemento = e.target.closest(".product");
    leerDatosElemento(elemento);
  }
}
function leerDatosElemento(elemento) {
  const infoElemento = {
    imagen: elemento.querySelector("img").src,
    titulo: elemento.querySelector("h3").textContent,
    precio: elemento.querySelector(".precio").textContent,
    id: elemento.querySelector("a").getAttribute("data-id"),
  };
  insertarCarrito(infoElemento);
}
function insertarCarrito(elemento) {
  const row = document.createElement("tr");
  row.innerHTML = ` 
    <td>
    <img src="${elemento.imagen}"  width= 100; >
    </td>
    <td>
    ${elemento.titulo}
    </td>
    <td>
    ${elemento.precio}
    </td>
    <td>
    <a href="#"  class="borrar btn-2" data-id="${elemento.id}"> X </a>
    </td>
    
    
    `;
  lista.appendChild(row);
  mostrarAlerta("Producto agregado al carrito");
}
function mostrarAlerta(mensaje) {
  const alerta = document.createElement("div");
  alerta.textContent = mensaje;
  alerta.style.position = "fixed";
  alerta.style.top = "20px";
  alerta.style.right = "20px";
  alerta.style.backgroundColor = "#28a745";
  alerta.style.color = "#fff";
  alerta.style.padding = "10px 20px";
  alerta.style.borderRadius = "5px";
  alerta.style.boxShadow = "0 2px 6px rgba(0,0,0,0.3)";
  alerta.style.zIndex = "9999";
  alerta.style.fontFamily = "sans-serif";
  alerta.style.transition = "opacity 0.5s ease";
  alerta.style.opacity = "1";

  document.body.appendChild(alerta);

  setTimeout(() => {
    alerta.style.opacity = "0";
    setTimeout(() => alerta.remove(), 500);
  }, 2000);
}

function mostrarAlertaEliminacion(mensaje) {
  const alerta = document.createElement("div");
  alerta.textContent = mensaje;
  alerta.style.position = "fixed";
  alerta.style.top = "20px";
  alerta.style.left = "20px";
  alerta.style.backgroundColor = "#dc3545";
  alerta.style.color = "#fff";
  alerta.style.padding = "10px 20px";
  alerta.style.borderRadius = "5px";
  alerta.style.boxShadow = "0 2px 6px rgba(0,0,0,0.3)";
  alerta.style.zIndex = "9999";
  alerta.style.fontFamily = "sans-serif";
  alerta.style.transition = "opacity 0.5s ease";
  alerta.style.opacity = "1";

  document.body.appendChild(alerta);

  setTimeout(() => {
    alerta.style.opacity = "0";
    setTimeout(() => alerta.remove(), 500);
  }, 2000);
}

function eliminarElemento(e) {
  e.preventDefault();
  let elemento, elementoId;
  if (e.target.classList.contains("borrar")) {
    e.target.parentElement.parentElement.remove();
    elemento = e.target.parentElement.parentElement;
    elementoId = elemento.querySelector("a").getAttribute("data-id");
  }
}
const iconoCarrito = document.getElementById("icono-carrito");


iconoCarrito.addEventListener("click", function (e) {
  e.stopPropagation(); // evita que se cierre al hacer clic en el ícono
  carrito.classList.toggle("activo");
});

// Si haces clic fuera del carrito, se cierra
document.addEventListener("click", function (e) {
  if (!carrito.contains(e.target) && !iconoCarrito.contains(e.target)) {
    carrito.classList.remove("activo");
  }
});

function vaciarCarrito() {
  while (lista.firstChild) {
    lista.removeChild(lista.firstChild);
  }
  mostrarAlertaEliminacion("Productos eliminados del carrito");
}

document.getElementById("miBoton").addEventListener("click", function () {
  window.location.href = "Pasarela_Pagos/Pasarela.html";
});

//slider     lo modifique porque no se ha terminado y me da error en consola
const swiper = new Swiper(".swiper", {
  loop: true,

  pagination: {
    el: ".swiper-pagination",
  },
});

const themeToggler = document.querySelector(".ajustar .theme-toggler");

// cambio de color
themeToggler.addEventListener("click", () => {
  document.body.classList.toggle("dark-theme");

  themeToggler.querySelector("span:nth-child(1)").classList.toggle("active");
  themeToggler.querySelector("span:nth-child(2)").classList.toggle("active");
});

let toggle = document.querySelector("#menu-btn");
let sidebar = document.querySelector("aside");
let main = document.querySelector("main");

if (toggle && sidebar && main) {
  toggle.onclick = function () {
    sidebar.classList.toggle("active");
    main.classList.toggle("active");
    console.log("Sidebar toggled");
  };
}
