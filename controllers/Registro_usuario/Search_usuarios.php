<script>
function editarFila(enlace) {
    const fila = enlace.closest('tr');

    // Obtener las celdas a editar
    const name_userCelda = fila.querySelector('.name_user');
    const emailCelda = fila.querySelector('.email');
    const password_userCelda = fila.querySelector('.password_user');

    // Obtener los valores actuales
    const name_userActual = name_userCelda.textContent.trim();
    const emailActual = emailCelda.textContent.trim();
    const password_userActual = password_userCelda.textContent.trim();

    // Reemplazar con inputs para edición
    name_userCelda.innerHTML = `<input type="text" name="name_user" value="${name_userActual}" required>`;
    emailCelda.innerHTML = `<input type="text" name="email" value="${emailActual}" required>`;
    password_userCelda.innerHTML = `<input type="text" name="password_user" value="${password_userActual}" required>`;

    // Obtener ID desde el atributo data-iduser
    const id_user = fila.dataset.iduser;

    // Crear input hidden para el ID si no existe ya
    let hiddenInput = document.querySelector("input[name='id_user']");
    if (!hiddenInput) {
    hiddenInput = document.createElement("input");
    hiddenInput.type = "hidden";
    hiddenInput.name = "id_user";
    document.getElementById("formu").appendChild(hiddenInput);
    }
    hiddenInput.value = id_user;  // Siempre actualiza el valor


    // Reemplazar el enlace "Editar" por un botón "Actualizar"
    const enlaces = fila.querySelectorAll('a');
    if (enlaces.length >= 1) {
        const primerEnlace = enlaces[0];
        const boton = document.createElement('button');
        boton.textContent = 'Actualizar';
        boton.type = 'submit';
        primerEnlace.replaceWith(boton);
    }
}

function Enviar() {
    document.getElementById("formu").submit();
}
</script>

<?php
include "../../models/usuarios.php";
$consultar = new usuarios();

$respuesta = isset($_POST["dato"])
    ? $consultar->ConsultaEspecifica($_POST["dato"], $_POST["valor"])
    : $consultar->ConsultaGeneral();

echo "<form id='formu' action='../../controllers/Administrador/actualizar_usuario.php' method='post'>
<table class='table table-striped'>
<tr>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>CORREO</th>
    <th>CONTRASEÑA</th>
    <th colspan='2'>ACCIONES</th>
</tr>";

foreach ($respuesta as $fila) {
    echo "<tr data-iduser='$fila[0]'>
        <td class='id_user'>$fila[0]</td>
        <td class='name_user'>$fila[1]</td>
        <td class='email'>$fila[2]</td>
        <td class='password_user'>$fila[3]</td>
        <td><a href='#' onclick='editarFila(this);'>Actualizar</a></td>
       <td><a href='Consulta_usuario.php?codigo=$fila[0]' onclick=\"return confirm('¿Seguro que quieres eliminar este usuario?');\">Eliminar</a></td>
    </tr>";
}

echo "</table></form>";
?>