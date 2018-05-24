<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\security\Session;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
        <style media="screen">
    body{
      background-color:#FF7F50;
    }
    </style>
  </head>
  <body>
    <h1>AHORCADO</h1>
    <?php
      $selectOption = $_POST["usuario"];
      $usuario=explode("-", $selectOption);
      $session= new Session($usuario[0]);
     ?>
  

 
     <h2> Usuario <?php echo  $session->getUsuario()." puntuación de: ".$usuario[1]." puntos"?></h2>
     <br><br><br>
     <a href="index.php">
       <input type="button" name="" value="LOGOUT" onclick= <?php $session->Logout();?> />
     </a>
  </body>
</html>
