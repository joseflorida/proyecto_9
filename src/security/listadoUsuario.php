<?php
require_once __DIR__.'/../../vendor/autoload.php';
use Daw\models\classes\Usuario;
?>

<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">


    </style>
    <meta charset="utf-8">
    <title>Pagina listado Usuarios</title>
        <style media="screen">
    body{
      background-color:#FF7F50;
    }
    </style>
  </head>
  <body>
    
  
      <h3>USUARIOS BASE DE DATOS:</h3>
          <?php

        $usuario=new Usuario();
        $resultado=$usuario->findAllUsuario();
    ?>
              <?php
                foreach ($resultado as $usuario)
                {
              ?>


                  <p><?php echo "ID:" .$usuario["id"]."<br>". "Nombre:" .$usuario["nombre"]."<br>" ."Apellido: ".$usuario["apellidos"]."<br>"."Edad:".$usuario["edad"]."<br>" ."Curso:".$usuario["curso"]."<br>"."Correo:".$usuario["correo"]."<br>" ."Puntuacion:".$usuario["puntuacion"] ;?></p>
             <?php
                }
              ?>
      <br>
      <a href="../../public/index.php">
        <input type='submit' value="Volver">
      </a>



  </body>
</html>
