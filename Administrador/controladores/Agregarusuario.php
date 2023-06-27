<?php
include_once ('../../conexion.php');
include_once('../modelos/Administrador.php');

// Crear el objeto de la clase Administrador
$admin = new Administrador();

// Definir los argumentos que se van a enviar mediante la función insertar usuario
$nombreusu = $_POST['txtnombre'];
$Apellidousu = $_POST['txtapellido'];
$usuariousu = $_POST['txtusuaerio'];
$passwordusu = MD5($_POST['txtpassword']);
$perfilusu = $_POST['txtperfil'];
$estadousu = $_POST['txtestado'];

$admin->addadmi($nombreusu, $Apellidousu, $usuariousu, $password, $perfil, $estadousu);
?>
