<?php
/*session_start();
if (!isset($_SESSION["perfil"]) || $_SESSION["perfil"] != 1) {
    header("location:../Errores/error403.html");
    exit;
}*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Registrar Administrador</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
  />
  <link rel="stylesheet" href="fff.css" />
  <link rel="icon" type="image/png" href="../../login/login/logo_huerta.png"/>
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up">
      <form
        action="../../../controllers/Administrador/registro_admin.php"
        method="post"
        onsubmit="return validarRegistro()"
      >
        <h1>Registrar Administrador</h1>
        <img class="H-logo" src="logo_huerta.png" alt="logo" width="100" />

        <div class="from-group">
          <label>Nombre de administrador</label>
          <input
            type="text"
            name="Nombre_usuario"
            placeholder="Ej: Carlos Pérez"
            required
          />
        </div>

        <div class="correo-contraseña">
          <div class="from-group">
            <label>Correo electrónico</label>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Ej: admin@correo.com"
              required
            />
          </div>

          <div class="from-group">
            <label>Contraseña</label>
            <input type="password" id="passwordRegistro" name="password" placeholder="Contraseña" required />
          </div>
        </div>

        <button type="submit" class="btn-1">Registrar Administrador</button>
      </form>

      <br />
      <a class="btn-1" href="../Dashboardd.php" style="text-align:center;">Volver al Dashboard</a>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>