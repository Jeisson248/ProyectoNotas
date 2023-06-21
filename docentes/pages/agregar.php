<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Inscripción de Docentes</title>
    <!-- Agregar los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 20px;
        }
        .container {
            max-width: 500px;
        }
        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulario de Inscripción de Docentes</h2>
        <form method="POST" action="guardar_docente.php">
            <div class="form-group">
                <label for="nombredoc">Nombre:</label>
                <input type="text" class="form-control" id="nombredoc" name="nombredoc" required>
            </div>
            <div class="form-group">
                <label for="apellidodoc">Apellido:</label>
                <input type="text" class="form-control" id="apellidodoc" name="apellidodoc" required>
            </div>
            <div class="form-group">
                <label for="documentodoc">Documento:</label>
                <input type="text" class="form-control" id="documentodoc" name="documentodoc" required>
            </div>
            <div class="form-group">
                <label for="correodoc">Correo electrónico:</label>
                <input type="email" class="form-control" id="correodoc" name="correodoc" required>
            </div>
            <div class="form-group">
                <label for="materia">Materia:</label>
                <input type="text" class="form-control" id="materia" name="materia" required>
            </div>
            <div class="form-group">
                <label for="notas">Notas:</label>
                <input type="number" step="0.1" class="form-control" id="notas" name="notas" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Agregar los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
