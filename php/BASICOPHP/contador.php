<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = $_POST['numero'];
    echo "<script>alert('El número tiene " . strlen($numero) . " dígitos.');</script>";
}
?>
