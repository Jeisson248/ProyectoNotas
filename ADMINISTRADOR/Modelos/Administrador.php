<?php
include_once('../../conexion.php');
class Administrador extends Conexion    
{

public function __construct(){
    
    $this->db = parent::__construct();

}
//funcion para registro usuaarios

public function addadmi($Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfilusu,$Estadousu)
{

//crear sentencia SQL
$statement = $this->db->prepare("INSER INTO usuarios(Nombreusu, Apellidousu, Usuariousu , passwordusu, Perfilusu,
 Estadousu)VALUES(:Nombreusu, :Apellidousu, :Apellidousu, :Usuariousu, :Passwordusu, :´Administrador´,:´activo´)");


$statement->bindParam(´:Nombreusu´,$Nombreusu);
$statement->bindParam(´:Apellidousu´,$Apellidousu);
$statement->bindParam(´:Usuariousu´,$Usuariousu);
$statement->bindParam(´:passwordusu,$Passwordusu);
$statement->bindParam(´:perfilusu´,$Perfilusu);
$statement->bindParam(´:Estadousu,$Estadousu);
if($statement->execute())

{
    echo "usuario registrado";

    header(Location: ´../Pages/index.php´);
    
}else
{
    echo "usuario no registrado";
    header(Location: ´../Pages/Agregar.php´);
}


}

//funcion para consultar los usuaroos administradores

public function getadmin()
{
    $row =null;
    $statement=$this->db->prepare("SELECT * FROM usuarios WHERE perfil=´Administrador´");
    $statement->execute();
    while($result->$statement->fetch()){
        $row[]=$result;
    }
    return$row;
}

// funcion para consultar ususario segun el id
public function getidadd($Id)
{
    $roll=null;
    $statement=$this->prepare("SELECT * FROM usuarios WHERE id_usuarios
    =:id AND Perfil=´Administraor´");
    $statement->bindParam(´:id´,$id);
    $statement->execute();
    while($result->$statement->flecht()){
    $row[]=$result;
    }
    
}
//actualizar los datos del usuario
public function updatead($Id,$Nombreusu,$Apellidousu,$Usuariosusu,$Passwordusu,$Estadousu)
{
$statement=$this->db->prepare("UPDATE usuarios * SET Nombreusu=
:Nombreusu, Apellidousu=:Apellidousu, Usuario=:Usuariousu,
Password=:Passwordusu, Estado=Estadousu WHERE id_usuario=$id");
$statement->bindparam(´:id´,$id);
$statement->bindparam(´:Nombreusu´,$Nombreusu);
$statement->bindparam(´:Apellidousu´,$Apellidousu);
$statement->bindparam(´:$Usuariosusu´,$Usuariosusu);
$statement->bindparam(´:$Passwordusu´,$Passwordusu);
$statement->bindparam(´:$Estadousu,$Estadousu);
if($statement->execute())
{
    header(´Location: ../pages/index.php´);
}else
{
    echo "Usuario no se puede actualizar";
    header(´Location: ../pages/editar.php´);
}

}
//funcion para eliminar usuario
 public function deleteadd($Id)
{
$statement=$this->db->prepare("DELETE FROM usuarios WHERE id_usuario=
:id");
$statement->bindparam(´:id´,$id);
if($statement->execute())
{
    echo "Usuario eliminado";
    header(´Location: ..pages/index.php´);

}else{
    {
    echo "error no se puede eliminar usuario";
    header(´Location: ..pages/eliminar.php´);
    }

}

}
?>