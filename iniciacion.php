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
  <p>Te invitamos a recordar tus mejores momentos de cada categoria en BAST</p>
  <hr class="my-4">
  <!-- <p>Te invitamos a recordar tus mejores momentos de cada categoria en BAST</p> -->
  <!-- <a class="btn btn-primary btn-lg" href="index.php" role="button">Comenzar</a> -->
</div>


<!-- PRUEBA -->
<div class="container">
  <div class="row ">
    <div class="card-deck">

    <div class="card" style="width: 18rem;">
  <img src="img/MaderoTango.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Madero Tango</h5>
    <p class="card-text">Un lugar para cenar y disfrutar de un hermoso espectaculo de Tango.</p>
    <a href="gastronomia.php" class="btn btn-primary">Recordar</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="img/PuenteMujer.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Puente de la Mujer</h5>
    <p class="card-text">Punto central si no visitas el puente, no conoces Puerto Madero.</p>
    <a href="lugares.php" class="btn btn-primary">Recordar</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="img/ReservaEcologica.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ReservaEcologica</h5>
    <p class="card-text">La reserva tiene 200 hectareas protegidas dentro de la Ciudad Autonoma de Buenos Aires.</p>
    <a href="actividades.php" class="btn btn-primary">Recordar</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="img/HotelSofitel.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hotel Sofitel</h5>
    <p class="card-text">Hotel, atendido por los mejores profesional y el mas alto nivel.</p>
    <a href="hoteles.php" class="btn btn-primary">Recordar</a>
  </div>
</div>


     </div> <!--Fin card-deck -->
   </div> <!--Fin row -->
</div> <!--Fin container -->

<?php include 'footer.php'; ?>