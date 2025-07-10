const themeToggler = document.querySelector(".theme-toggler");

// cambio de color
themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
})

let toggle = document.querySelector("#menu-btn"); // Este es tu botón para abrir el menú
let sidebar = document.querySelector("aside");
let main = document.querySelector("main");

toggle.onclick = function() {
    sidebar.classList.toggle("active");
    main.classList.toggle("active");
    console.log("Sidebar toggled");
};

// Hover dinámico en los enlaces del sidebar
let list = document.querySelectorAll("aside .sidebar a");

function activeLink() {
    list.forEach((item) => {
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));


// Resaltar el elemento seleccionado en el sidebar
let sidebarLinks = document.querySelectorAll("aside .sidebar a");

sidebarLinks.forEach(link => {
    link.addEventListener("click", function () {
        sidebarLinks.forEach(item => item.classList.remove("active"));
        this.classList.add("active");
    });
});


/*
// filtro del dashboard
function toggleFiltro() {
    const filtro = document.getElementById('bloque-filtro');
    filtro.classList.toggle('d-none');
}

function cerrarFiltro() {
    const filtro = document.getElementById('bloque-filtro');
    filtro.classList.add('d-none');
    // Aquí puedes agregar código para limpiar los inputs si lo deseas
}
*/