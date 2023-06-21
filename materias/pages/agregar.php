<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Materias</title>
    <!-- Agregar enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Estilos adicionales */
        body {
            padding: 20px;
        }

        .container {
            max-width: 500px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Formulario de Materias</h2>

        <?php
        // Procesar el formulario cuando se envía
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validar y guardar los datos enviados
            $nombrema = $_POST["nombrema"];

            // Conexión a la base de datos (Asegúrate de actualizar los valores según tu configuración)
            $servername = "localhost";
            $username = "tu_usuario";
            $password = "tu_contraseña";
            $dbname = "nombre_de_tu_base_de_datos";

            // Crear la conexión
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Consulta SQL para insertar los datos en la tabla
            $sql = "INSERT INTO materias (nombrema) VALUES ('$nombrema')";

            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-success">Materia creada exitosamente.</div>';
            } else {
                echo '<div class="alert alert-danger">Error al crear la materia: ' . $conn->error . '</div>';
            }

            // Cerrar la conexión
            $conn->close();
        }
        ?>

        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="nombrema">Nombre de la materia:</label>
                <input type="text" id="nombrema" name="nombrema" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Crear Materia</button>
        </form>
    </div>

    <!-- Agregar scripts de Bootstrap al final del archivo -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>