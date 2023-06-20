<!DOCTYPE html>
<html>

<head>
    <title>Resultado del calculo del salario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333;
        }

        .resultado {
            width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        p {
            margin: 0;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    $nombre = $_POST["nombre"];
    $cantidad = $_POST["cantidad"];
    $precio = $_POST["precio"];

    $salario_base = 737000;
    $comision_por_auto = 50000;
    $porcentaje_venta = 0.05;

    $salario_total = $salario_base + ($comision_por_auto * $cantidad) + ($porcentaje_venta * $precio);
    ?>

    <div class="resultado">
        <h2>Resultado del salario + comicion</h2>
        <p>Nombre del vendedor: <?php echo $nombre; ?></p>
        <p>Salario total: <?php echo $salario_total; ?></p>
    </div>
</body>

</html>