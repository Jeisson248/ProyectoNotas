<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Estudiantes</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <center>
    <h2>Formulario de Estudiantes</h2>
    </center>
    <form method="POST" action="procesar_formulario.php">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" required>
      </div>

      <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" name="apellido" id="apellido" required>
      </div>

      <div class="form-group">
        <label for="documento">Documento:</label>
        <input type="text" class="form-control" name="documento" id="documento" required>
      </div>

      <div class="form-group">
        <label for="correo">Correo:</label>
        <input type="email" class="form-control" name="correo" id="correo" required>
      </div>

      <div class="form-group">
        <label for="materias">Materias:</label>
        <textarea class="form-control" name="materias" id="materias" required></textarea>
      </div>

      <div class="form-group">
        <label for="docente">Docente:</label>
        <input type="text" class="form-control" name="docente" id="docente" required>
      </div>

      <div class="form-group">
        <label for="promedio">Promedio:</label>
        <input type="number" step="0.01" class="form-control" name="promedio" id="promedio" required>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
