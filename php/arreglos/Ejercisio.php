<!DOCTYPE html>
<html>
<head>
    <title>Números Pares</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding-top: 50px;
        }

        h1 {
            color: #333;
        }

        .numeros {
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Números Pares</h1>

    <div class="numeros">
        <?php
        $numerosPares = [];
        $contador = 0;
        $numero = 2;

        while ($contador < 10) {
            $numerosPares[] = $numero;
            $numero += 2;
            $contador++;
        }

        foreach ($numerosPares as $numero) {
            echo $numero . "<br>";
        }
        ?>
    </div>
</body>
</html>
