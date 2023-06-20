<?php

// Definición del vector asociativo con los días de la semana
$diasSemana = array(
    "lunes" => 1,
    "martes" => 2,
    "miércoles" => 3,
    "jueves" => 4,
    "viernes" => 5,
    "sábado" => 6,
    "domingo" => 7
);

// Obtener el primer día de la semana
$primerDia = array_keys($diasSemana)[0];

// Obtener el último día de la semana
$ultimoDia = array_keys($diasSemana)[count($diasSemana) - 1];

// Crear una lista HTML para mostrar el primer y último día de la semana
echo "<ul>";
echo "<li>Primer día de la semana: " . $primerDia . "</li>";
echo "<li>Último día de la semana: " . $ultimoDia . "</li>";
echo "</ul>";


?>

