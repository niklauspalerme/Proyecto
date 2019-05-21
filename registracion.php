<?php
session_start();
$UserRegistro= $_SESSION["usuario"];
  $EmailRegistro=$_SESSION["email"];
  $ProvinciaRegistro=$_SESSION["provincia"];

/* echo "El usuario: ". $UserRegistro . " ,se registro con exito! <br>";
echo "El email es: ". $EmailRegistro . "<br>";
echo "La provincia seleccionada es: ".$ProvinciaRegistro ;
 */


?>

<?php include 'header.php'; ?>

<div class="jumbotron">
  <h1 class="display-4">Bienvenido, <?php echo $UserRegistro ;?></h1>
  <p class="lead"><i class="fas fa-envelope"></i> <?php echo $EmailRegistro ;?></p>
  <p class="lead"><i class="fas fa-globe-americas"></i> <?php echo $ProvinciaRegistro ;?></p>
  <hr class="my-4">
  <p>Esperamos que la web sea de su agrado, y que nos ayudes a mejorar.</p>
  <a class="btn btn-primary btn-lg" href="index.php" role="button">Comenzar</a>
</div>

