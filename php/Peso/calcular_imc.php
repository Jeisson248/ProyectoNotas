<!DOCTYPE html>
<html>

<head>
  <title>Resultado del IMC</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
    }

    p {
      margin-top: 10px;
      text-align: center;
    }
  </style>
</head>

<body>
  <h1>Resultado del indice de Masa Corporal (IMC)</h1>
  <?php
  // Obtener los datos del formulario
  $nombre = $_POST['nombre'];
  $peso = $_POST['peso'];
  $estatura = $_POST['estatura'];

  // Calcular el IMC
  $imc = $peso / ($estatura * $estatura);

  // Determinar la categoría
  $categoria = '';
  if ($imc < 18.5) {
    $categoria = 'Por debajo del peso';
  } elseif ($imc < 25.0) {
    $categoria = 'Saludable';
  } elseif ($imc < 30.0) {
    $categoria = 'Con sobrepeso';
  } elseif ($imc < 40.0) {
    $categoria = 'Obeso';
  } else {
    $categoria = 'Obesidad mórbida';
  }

  // Mostrar los resultados
  echo "<p>Nombre del paciente: $nombre</p>";
  echo "<p>ÍIndice de Masa Corporal (IMC): $imc</p>";
  echo "<p>Categoria: $categoria</p>";
  ?>
</body>

</html>
