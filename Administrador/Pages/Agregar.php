<!DOCTYPE html>
<html>

<head>
  <title>Agregar Usuario</title>
  <!-- Enlace a los estilos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      padding-top: 80px;
      background-color: #f8f9fa;
    }

    .container {
      max-width: 450px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .form-group label {
      font-weight: bold;
    }

    .btn-primary {
      width: 100%;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $("form").submit(function(e) {
        e.preventDefault(); // Evita el envío del formulario por defecto

        // Validar los datos aquí
        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var usuario = $("#usuario").val();
        var contrasena = $("#contrasena").val();

        if (nombre && apellido && usuario && contrasena) {
          // Si todos los campos están llenos, mostrar alerta de éxito
          alert("Usuario agregado exitosamente");
          this.submit(); // Enviar el formulario
        } else {
          // Mostrar mensaje de validación si algún campo está vacío
          alert("Por favor, complete todos los campos");
        }
      });
    });
  </script>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2 class="text-center mb-4">Agregar Usuario</h2>
        <form action="guardar_usuario.php" method="POST">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
          <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
          </div>
          <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
          </div>
          <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" class="form-control" id="contrasena" name="contrasena" required>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Agregar</button>
          </br>
        </form>
      </div>
    </div>
  </div>
</body>

</html>