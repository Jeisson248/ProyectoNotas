<?php
include_once("clasecuentas.php");

// crear un objeto
$saldo=0;
$cuenta=0;
$propietario=0;
$contraseña=0;
$usuario = new cuenta($saldo,$cuenta,$propietario,$contraseña);
$usuario->consultarsaldo();
$usuario->deposito(100000);
$usuario->validarcuenta(40414,123);



echo $usuario->consultarsaldo();
$usuario->deposito(200000);
echo "<br>";
echo $usuario->consultarsaldo();
echo "<br>";
$usuario->retiro(200000);
?>
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

        public function validarcuenta($propietario, $contraseña)
        {
            if ($propietario === $this->propietario && $contraseña === $this->password) {
                echo "El usuario tiene una cuenta activa." . "<br>";
            } else {
                echo "Validar los datos de ingreso." . "<br>";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tipo_documento = $_POST["tipo_documento"];
        $numero_documento = $_POST["numero_documento"];
        $clave = $_POST["clave"];

        // Verificar los datos ingresados
        $cuenta1 = new cuenta(1000, "40414", "John Doe", "123");
        if ($numero_documento !== "40414" || $clave !== "123") {
            echo '<script>alert("Los datos ingresados son incorrectos.");</script>';
        } else {
            echo '<script>alert("El usuario tiene una cuenta activa.\n\nInformación de la cuenta:\n\nSaldo: ' . $cuenta1->consultarsaldo() . '");</script>';
        }

        // Ejemplo de uso adicional
        $cuenta1->deposito(500);
        echo "Saldo después del depósito: " . $cuenta1->consultarsaldo() . "<br>";

        $cuenta1->retiro(200);
        echo "Saldo después del retiro: " . $cuenta1->consultarsaldo() . "<br>";
    }
    ?>
</body>
</html>