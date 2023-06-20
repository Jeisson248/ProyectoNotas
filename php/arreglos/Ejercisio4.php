<?php
$cantidad_datos = 10;
$array_pares = array();
for ($i = 0; $i < $cantidad_datos; $i++) {
    $numero_par = rand(0, 100);
    if ($numero_par % 2 == 0) {
        $array_pares[] = $numero_par;
    } else {
        $i--;
    }
}

$array_impares = array();
for ($i = 0; $i < $cantidad_datos; $i++) {
    $numero_impar = rand(0, 50);
    if ($numero_impar % 2 != 0) {
        $array_impares[] = $numero_impar;
    } else {
        $i--;
    }
}

$array_suma = array();
for ($i = 0; $i < $cantidad_datos; $i++) {
    $array_suma[] = $array_pares[$i] + $array_impares[$i];
}

function mostrarLista($array)
{
    echo "<ul>";
    foreach ($array as $valor) {
        echo "<li>" . $valor . "</li>";
    }
    echo "</ul>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        .pares {
            color: blue;
        }

        .impares {
            color: red;
        }

        .suma {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Array de números pares:</h1>
    <div class="pares">
        <?php mostrarLista($array_pares); ?>
    </div>

    <h1>Array de números impares:</h1>
    <div class="impares">
        <?php mostrarLista($array_impares); ?>
    </div>

    <h1>Array de suma de valores:</h1>
    <div class="suma">
        <?php mostrarLista($array_suma); ?>
    </div>
</body>
</html>
