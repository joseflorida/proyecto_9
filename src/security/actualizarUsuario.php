<?php
require_once __DIR__.'/../../vendor/autoload.php';
use Daw\models\classes\Usuario;


    if(isset($_POST["actualizar"])){
      $usuario=new Usuario();
      $usuario->updateUsuario($id=$_POST['id'],$nombre=$_POST['nombre'],$apellidos=$_POST['apellidos'],$edad=$_POST['edad'],$curso=$_POST['curso'],$puntuacion=$_POST['puntuacion'],$correo=$_POST['correo']);
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina actualizar Usuario</title>
        <style media="screen">
    body{
      background-color:#FF7F50;
    }
    </style>
  </head>
  <body>
    <h1>Actualizar USUARIOS</h1>

<form class="" action="actualizarUsuario.php" method="post" onsubmit="validar2()">
<label for="id">Id: </label>  <input type="text" name="id" id="id" value="" onFocus="this.value=''"><br>
<label for="nombre">Nombre: </label>  <input type="text" name="nombre" id="nombre2" value="" onFocus="this.value=''"><br>
<label for="apellidos">Apellidos: </label>  <input type="text" name="apellidos" id="apellidos2" value="" onFocus="this.value=''"><br>
<label for="edad">Edad: </label>  <input type="text" name="edad" id="edad2" value="" onFocus="this.value=''"><br>
<label for="curso">Curso: </label>  <input type="text" name="curso" id="curso2" value="" onFocus="this.value=''"><br>
<label for="puntuacion">Puntuacion: </label>  <input type="text" name="puntuacion" id="puntuacion2" value="" onFocus="this.value=''"><br>
<label for="correo">Correo: </label>  <input type="text" name="correo" id="correo2" value="" onFocus="this.value=''"><br>
<input type="hidden" name="actualizar" value="actualizar">

  <br>
<input type="submit" name="actualizar"  value="actualizar"  class="boton">
</form>

      <br>
      <a href="../../public/index.php">
        <input type='submit' value="Volver">
      </a>

  </body>
</html>
