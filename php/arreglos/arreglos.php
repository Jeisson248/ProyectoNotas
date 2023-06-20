<?php
function lanzarDados() {
    // Generar números aleatorios para los dados
    $dado1 = rand(1, 6);
    $dado2 = rand(1, 6);
    
    // Obtener la ruta de las imágenes de los dados
    $rutaImagenes = 'C:/xampp/htdocs/arreglos/imagenes/';
    
    // Mostrar imágenes de los dados
    echo '<img src="' . $rutaImagenes . 'dado' . $dado1 . '.png" alt="Dado ' . $dado1 . '" />';
    echo '<img src="' . $rutaImagenes . 'dado' . $dado2 . '.png" alt="Dado ' . $dado2 . '" />';
    
    // Mostrar los números obtenidos en los dados
    echo 'El primer dado muestra: ' . $dado1 . '<br>';
    echo 'El segundo dado muestra: ' . $dado2 . '<br>';
    
    // Calcular y mostrar la suma de los dados
    $suma = $dado1 + $dado2;
    echo 'La suma de los dados es: ' . $suma;
    
    return $suma; // Devolver la suma de los dados
}

// Variables para contar pares, impares y sus sumas
$cantidadPares = 0;
$cantidadImpares = 0;
$sumaPares = 0;
$sumaImpares = 0;

// Realizar 10 tiradas de los dados
for ($i = 1; $i <= 10; $i++) {
    echo '<h2>Tirada ' . $i . '</h2>';
    $suma = lanzarDados();
    
    // Verificar si la suma es par o impar y actualizar las variables correspondientes
    if ($suma % 2 == 0) {
        $cantidadPares++;
        $sumaPares += $suma;
    } else {
        $cantidadImpares++;
        $sumaImpares += $suma;
    }
    
    echo '<hr>';
}

// Mostrar resultados de pares e impares
echo '<h2>Resultados:</h2>';
echo 'Cantidad de números pares: ' . $cantidadPares . '<br>';

echo 'Cantidad de números impares: ' . $cantidadImpares . '<br>';



?>
