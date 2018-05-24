<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\classes\Usuario;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
        <style media="screen">
              .center {
    margin: auto;
    width: 50%;
    
    padding: 10px;
}
    body{
      background-color:#FF7F50;
    }
    </style>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
  </head>
  <body>
    <h3>SELECCIONA UN USUARIO</h3>
    <?php

        $usuario=new Usuario();
        $resultado=$usuario->findAllUsuario();
    ?>
      <form name='myform' action='juego.php' method='POST'>
        <select id="select" name="usuario">
          div
                <option>Selecciona un Usuario</option>
              <?php 
                foreach ($resultado as $usuario)
                {
              ?>
                  <option value= <?php echo $usuario["nombre"]."-".$usuario["puntuacion"];?>><?php echo $usuario["nombre"];?></option>
             <?php
                }
              ?>
                  <option >Admin</option>
      </select>
      <br>
      <input type='submit' value="Entrar">
    </form>

    <br><br>
    <div id="buttonHidden">
      <a  href="../src/security/listadoUsuario.php" >
        <input type='button' value="Lista Usuarios" />
      </a>
      <a  href="../src/security/actualizarUsuario.php" >
        <input type='button' value="Actualizar Usuario" />
      </a>
      <a  href="../src/security/borrarUsuario.php" >
        <input type='button' value="Borrar Usuario" />
      </a>
  </div>
  <a  href="insertarUsuario.php" >
    <input type='button' value="Insertar Usuario" />
  </a>
  </body>
</html>
