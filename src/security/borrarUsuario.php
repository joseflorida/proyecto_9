<?php
require_once __DIR__.'/../../vendor/autoload.php';
use Daw\models\classes\Usuario;

    if(isset($_POST["borrar"])){
      $usuario=new Usuario();

$usuario->deleteUsuario($id=$_POST['id']);
    }


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>borrar Usuario</title>
    <style media="screen">
    body{
      background-color:#FF7F50;
    }
    </style>
  </head>
  <body>
    <h3>Borarr USUARIOS</h3>
    <form class="" action="borrarUsuario.php" method="post" onsubmit="seguro()">
  <label for="id">Id: </label> <input type="text" name="id" id="miCampo" value="" onFocus="this.value=''"><br>
  <br>
<input type="hidden" name="borrar" value="borrar">
<input type="submit" name="borrar"  value="borrar"  class="boton">
</form>



      <br>
      <a href="../../public/index.php">
        <input type='submit' value="Volver">
      </a>

  </body>
</html>
