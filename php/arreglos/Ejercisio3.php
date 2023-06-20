<?php

$datos = array(
    "Nombre" => "Juan Orozco",
    "Direccion" => "Carrera 48 A #22",
    "Telefono" => "3215489621"
);

echo "<ul>";

foreach ($datos as $clave => $valor) {
    echo "<li><strong>$clave:</strong> $valor</li>";
}

echo "</ul>";

?>
