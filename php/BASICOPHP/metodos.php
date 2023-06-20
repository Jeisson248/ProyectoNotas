<?php
//funciones sin parametros si retorno
$Nume1 = $_POST['txtn1'];
$Nume2 = $_POST['txtn2'];

function sumar()
{

$Numero1 = $_POST['txtn1'];
$Numero2 = $_POST['txtn2'];


  $Suma = $Numero1+$Numero2;
  echo"<br>";
  echo"El eresultado de la suma es:". $Suma;
}

//FUNCION con parametros

function restar($Nume1,$Nume2)
{
  $Numero1 = $_POST['txtn1'];
  $Numero2 = $_POST['txtn2'];

  $Restar = $Numero1-$Numero2;
  echo"el resultado de la resta es :". $Restar;
}

sumar();
echo"<br>";
restar($Nume1,$Nume2);

// FUNCION SIN PARAMETROS SIN RETORNO 

function multiplicar ()
{
  $Multi = ($Numero1 * $Numero2);
  echo "El resultado es: ", $Multi;
  return ($Multi);

}
// FUNCION CON PARAMETROS SIN RETORNO
function dividir ($Numero1,$Numero2)
{
$divi = $Numero1 / $Numero2;
echo "El resultado es : ", $divi
}
sumar ();
echo "<br>";
restar ($Numero1,$Numero2);
echo "<br>"
multiplicar ($Numero1,$Numero2);
echo "<br>";
dividir($Numero1,$Numero2)

?>