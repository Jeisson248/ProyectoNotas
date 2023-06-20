<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Notas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            margin: 0 auto;
            max-width: 600px;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 15px;
        }

        table {
            margin-top: 30px;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        input[type="text"] {
            padding: 5px;
            width: 80px;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        h2 {
            margin-top: 20px;
            color: #333;
            text-align: center;
        }

        p {
            color: #333;
        }

        .aprobado {
            color: green;
        }

        .reprobado {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Calculadora de Notas</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table>
            <tr>
                <th>Parcial 1</th>
                <th>Parcial 2</th>
                <th>Parcial 3</th>
                <th>Examen Final</th>
                <th>Trabajo Final</th>
            </tr>
            <tr>
                <td><input type="text" name="parcial1" required></td>
                <td><input type="text" name="parcial2" required></td>
                <td><input type="text" name="parcial3" required></td>
                <td><input type="text" name="final" required></td>
                <td><input type="text" name="trabajo" required></td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Calcular Nota Final">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $parcial1 = $_POST['parcial1'];
        $parcial2 = $_POST['parcial2'];
        $parcial3 = $_POST['parcial3'];
        $final = $_POST['final'];
        $trabajo = $_POST['trabajo'];

        // Calcular la nota final
        $notaFinal = ($parcial1 * 0.1) + ($parcial2 * 0.1) + ($parcial3 * 0.1) + ($final * 0.35) + ($trabajo * 0.35);

        // Verificar si se aprobó la materia
        $mensaje = ($notaFinal >= 3.6) ? "Aprobó" : "No aprobó";
        $estadoClase = ($nota
