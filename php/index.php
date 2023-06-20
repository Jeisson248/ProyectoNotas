<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores del formulario
  $nombre = $_POST["nombre"];
  $peso = $_POST["peso"];
  $estatura = $_POST["estatura"];
  
  // Calcular el IMC
  $imc = $peso / ($estatura * $estatura);
  
  // Determinar la categoría del IMC
  if ($imc < 18.5) {
    $categoria = "Por debajo del peso";
  } elseif ($imc >= 18.5 && $imc < 25.0) {
    $categoria = "Saludable";
  } elseif ($imc >= 25.0 && $imc < 30.0) {
    $categoria = "Con sobrepeso";
  } elseif ($imc >= 30.0 && $imc < 40.0) {
    $categoria = "Obeso";
  } else {
    $categoria = "Obesidad mórbida";
  }

  // Mostrar el resultado
  echo "<h2>Resultado</h2>";
  echo "<p>Nombre: $nombre</p>";
  echo "<p>Peso: $peso kg</p>";
  echo "<p>Estatura: $estatura m</p>";
  echo "<p>IMC: $imc</p>";
  echo "<p>Categoría: $categoria</p>";
}
?>
