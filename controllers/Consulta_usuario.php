<script>
    function editarFila(enlace) {       
        //Se define la fila seleccionada para edición   
        const fila = enlace.closest('tr');

        // Obtener celdas por clase
        const idCelda = fila.querySelector('.id');
        const documentoCelda = fila.querySelector('.documento');
        const nombreCelda = fila.querySelector('.nombre');
        const telefonoCelda = fila.querySelector('.telefono');
        const correoCelda = fila.querySelector('.correo');        

        // Obtener valores actuales, se almacenan en variables JS
        const idActual = idCelda.textContent;
        const documentoActual = documentoCelda.textContent;
        const nombreActual = nombreCelda.textContent;
        const telefonoActual = telefonoCelda.textContent;
        const correoActual = correoCelda.textContent;
        
        // Reemplaza el texto de cada celda con un input y asigna el dato para editar
        idCelda.innerHTML = `<input type="number" name="id" readonly value="${idActual}">`;
        documentoCelda.innerHTML = `<input type="number" name="documento" value="${documentoActual}">`;
        nombreCelda.innerHTML = `<input type="text" name="nombre" value="${nombreActual}">`;
        telefonoCelda.innerHTML = `<input type="number" name="telefono" value="${telefonoActual}">`;
        correoCelda.innerHTML = `<input type="email" name="correo" readonly value="${correoActual}">`;

        // Reemplaza el primer enlace por un botón Actualizar
        const enlaces = fila.querySelectorAll('a');           
        if (enlaces.length >= 1) {
            const primerEnlace = enlaces[0]; // Se ubica en el <a>Editar</a>
            //Se define el botón y sus características
            const boton = document.createElement('button');
            boton.textContent = 'Actualizar';
            //Si pulsa el botón actualizar, ejecuta la función JS Enviar()
            boton.onclick = function () {
                Enviar();   //Ejecuta la función Enviar
            };
            primerEnlace.replaceWith(boton);    //Se reemplaza el enlace por el botón definido
        }
    }

    //Función que envía el formulario al controlador de Actualizar
    function Enviar(){
        //El formulario tiene el id formu
        document.getElemetById("formu").submit();
    }
</script>

<?php

include "../models/usuario.php";

$consultar = new usuarios();

if(isset($_POST["dato"])){
    //Si el usuario utiliza el buscador asignando datos, se ejecuta la consulta Específica
    $respuesta = $consultar->ConsultaEspecifica($_POST["dato"],$_POST["valor"]);
}
else{
    //Si el usuario no utiliza el buscador, se ejecuta la consulta General
    $respuesta = $consultar->ConsultaGeneral();
}

//Se define el formulario con id formu para que desde JS se pueda enviar
//Toda la tabla esta dentro de un form para que al dar clic en el botón Actualizar,
//los datos sean enviados al controlador actualizar y la lógica se ejecute
echo "<form id='formu' action='../actualizar_usuario.php' method='post'><table class='table table-hover'><tr>
    
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>CATEGORIA</th>
        <th>DESCRIPCION</th>
        </tr>";

foreach($respuesta as $fila){
    //Cada celda tiene un id para que el dato sea almacenado desde JS
    //Al dar clic en el link Editar, se ejecuta la función JS llamada editarFila
    //Al dar clic en el link Eliminar se comunica el id del usuario para realizar el cambio de estado
    echo "<tr><td class='id'>$fila[0]</td>
        <td class='documento'>$fila[1]</td>
        <td class='nombre'>$fila[2]</td>
        <td class='telefono'>$fila[3]</td>
        <td class='correo'>$fila[4]</td>
        <td class='perfil'>$fila[6]</td>
        <td><a href='#' onclick='editarFila(this);'>Editar</a></td>
        <td><a href='../controllers/eliminar_usuarios.php?codigo=$fila[0]'>Eliminar</a></td>
        </tr>";
}
echo "</table></form>";