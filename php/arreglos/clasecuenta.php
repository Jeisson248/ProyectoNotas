<!DOCTYPE html>
<html>
<head>
    <title>Bienvenidos al sistema</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenidos al sistema</h1>
        <button onclick="showLoginSection();" class="btn btn-primary">Iniciar sesión</button>
    </div>

    <div id="login-section" class="container" style="display: none;">
        <h1>Iniciar sesión</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="tipo_documento">Tipo de documento:</label>
                <select class="form-control" id="tipo_documento" name="tipo_documento">
                    <option value="dni">DNI</option>
                    <option value="pasaporte">Pasaporte</option>
                    <option value="cedula">Cédula</option>
                </select>
            </div>
            <div class="form-group">
                <label for="numero_documento">Número de documento:</label>
                <input type="text" class="form-control" id="numero_documento" name="numero_documento">
            </div>
            <div class="form-group">
                <label for="clave">Clave:</label>
                <input type="password" class="form-control" id="clave" name="clave">
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
    </div>

    <?php
    class cuenta
    {
        // Propiedades
        private $saldo = 0;
        private $Nucuenta;
        private $propietario;
        private $password;

        public function __construct($saldo, $Nucuenta, $propietario, $password)
        {
            $this->saldo = $saldo;
            $this->Nucuenta = $Nucuenta;
            $this->propietario = $propietario;
            $this->password = $password;
        }

        public function deposito($valordeposito)
        {
            $this->saldo += $valordeposito;
        }

        public function consultarsaldo()
        {
            return $this->saldo;
        }

        public function retiro($vretiro)
        {
            if ($vretiro <= $this->saldo) {
                echo "Retiro en proceso. ";
                $this->saldo -= $vretiro;
                echo "Su nuevo saldo es: " . $this->saldo . "<br>";
            } else {
                echo "Tiene fondos insuficientes." . "<br>";
            }
        }

        public function validarcuenta($numero_documento, $clave)
        {
            if ($numero_documento === $this->Nucuenta && $clave === $this->password) {
                echo '<script>alert("El usuario tiene una cuenta activa.");</script>';
                echo '<script>alert("Información de la cuenta:\n\nSaldo: ' . $this->consultarsaldo() . '");</script>';
            } else {
                echo '<script>alert("Validar los datos de ingreso.");</script>';
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tipo_documento = $_POST["tipo_documento"];
        $numero_documento = $_POST["numero_documento"];
        $clave = $_POST["clave"];

        // Verificar los datos ingresados
        $cuenta1 = new cuenta(1000, "40414", "John Doe", "123");
        $cuenta1->validarcuenta($numero_documento, $clave);

        // Ejemplo de uso adicional
        $cuenta1->deposito(500);
        echo "Saldo después del depósito: " . $cuenta1->consultarsaldo() . "<br>";

        $cuenta1->retiro(200);
        echo "Saldo después del retiro: " . $cuenta1->consultarsaldo() . "<br>";
    }
    ?>

    <script>
        function showLoginSection() {
            document.getElementById("login-section").style.display = "block";
        }
    </script>
</body>
</html>
