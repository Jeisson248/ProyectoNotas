<!DOCTYPE html>
<html>
<head>
    <title>Promedios de Grupos</title>
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

        .grupo {
            display: inline-block;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .grupo h2 {
            color: #666;
        }

        .grupo p {
            margin-top: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Promedios de Grupos</h1>

    <div class="grupo">
        <h2>Grupo A</h2>
        <?php
        $grupoA = [
            ["nombre" => "Estudiante 1", "nota" => mt_rand(50, 10)],
            ["nombre" => "Estudiante 2", "nota" => mt_rand(50, 10)],
            // ... Agrega los nombres y notas de los estudiantes del grupo A
        ];

        $promedioGrupoA = calcularPromedioGrupo($grupoA);

        echo "<p>Promedio: " . $promedioGrupoA . "</p>";
        ?>
    </div>

    <div class="grupo">
        <h2>Grupo B</h2>
        <?php
        $grupoB = [
            ["nombre" => "Estudiante 1", "nota" => mt_rand(50, 10)],
            ["nombre" => "Estudiante 2", "nota" => mt_rand(50, 10)],
            // ... Agrega los nombres y notas de los estudiantes del grupo B
        ];

        $promedioGrupoB = calcularPromedioGrupo($grupoB);

        echo "<p>Promedio: " . $promedioGrupoB . "</p>";
        ?>
    </div>

    <div class="grupo">
        <h2>Promedio General</h2>
        <?php
        $promedioGeneral = ($promedioGrupoA + $promedioGrupoB) / 2;

        echo "<p>Promedio: " . $promedioGeneral . "</p>";
        ?>
    </div>

    <div class="grupo">
        <h2>Grupo con Mejor Promedio</h2>
        <?php
        $grupoMejorPromedio = ($promedioGrupoA > $promedioGrupoB) ? "Grupo A" : "Grupo B";

        echo "<p>" . $grupoMejorPromedio . "</p>";
        ?>
    </div>
</body>
</html>

<?php
function calcularPromedioGrupo($grupo)
{
    $notas = array_column($grupo, 'nota');
    $promedio = array_sum($notas) / count($grupo);
    return $promedio;
}
?>
