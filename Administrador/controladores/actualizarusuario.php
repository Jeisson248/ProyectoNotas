<?php
require_once('../../conexion.php');
require_once('../modelos/administrador.php');

if($_POST){

    $admin = new Administrador();
    $id =$_POST['id'];
    $nombreusu = $_POST['id'];  
    $apellidousu = $_POST[txtnombre];
    $usuario = $_POST[txtapellido];
    $passwordusu = $_POST[txtpassword];
    $perfilusu = $_POST[txtperfil];
    $estadousu = $_POST[txtestado];

    $admin->updatead($Id, $nombreusu, $apellidousu, $usuariosusu, $passwordusu, 
    $perfilusu, $estadousu)
    if($admin)
    {
        print"<script>" Alert(\"usuario actualizado\");
        windows.location='../pages/index.php';</script>";
    }else
    {
        print "<script>"alert(\"usuario no actualizado\");
        window.location=../pages/editar.php';</script>";
    }

}
?>