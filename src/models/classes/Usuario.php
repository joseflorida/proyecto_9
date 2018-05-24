<?php
namespace Daw\models\classes;
use Daw\models\classes\Table;

class Usuario extends Table
{
  function __construct()
  {
    parent::__construct();
  }
  public function findAllUsuario()
  {
    return parent::find("SELECT * FROM Usuarios ");
  }
  public function findUsuarioByName($nombre)
  {
    return parent::find("SELECT * FROM Usuarios WHERE Name=$nombre");
  }
  public function insertUsuarioinsert($nombre,$apellidos,$edad, $curso,$puntuacion,$correo)
  {
    $sql ="INSERT INTO Usuarios (nombre, apellidos, edad,curso,puntuacion,correo)
          VALUES ('$nombre','$apellidos',$edad,$curso,$puntuacion,'$correo')";
 return parent::insert($sql);

  }
  public function updateUsuario($id,$nombre,$edad,$apellidos, $curso, $puntuacion, $correo)
  {
    $sql ="UPDATE  Usuarios
        SET id='$id',nombre='$nombre',apellidos='$apellidos',edad='$edad',curso='$curso',puntuacion='$puntuacion',correo='$correo'
        WHERE id='$id'";
     return parent::update($sql);
  }
  public function deleteUsuario($id)
  {
      $sql = "DELETE FROM Usuarios WHERE id='$id'";
       return parent::update($sql);
  }
}
 ?>
