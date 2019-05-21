<?php
//INCLUDES Y REQUIERE
include_once("funciones.php");

//FIN INCLUDES Y REQUIERE


//VARIABLES

$ErrorRegistro=0;

$MensajeError="";

if ($_POST){

  //VALIDACION
  $UserRegistro= $_POST["usuario"];
  $EmailRegistro=$_POST["email"];
  $ProvinciaRegistro=$_POST["provincia"];

foreach ($usuarios as $value) {
 if ($UserRegistro == $value) {
  $ErrorRegistro=1;
  $MensajeError="El usuario: $UserRegistro ya se encuentra registrado";
/*   header("Location:signin.php");exit; */

 }
}
 foreach ($email as $value) {
  if ($EmailRegistro == $value) {
    $ErrorRegistro=2;
   $MensajeError="El email: $EmailRegistro ya se encuentra registrado";
  /*  header("Location:signin.php");exit; */
  }

}
  //REGISTRAR


  //REDIRIGIR
  if ($ErrorRegistro==0) {
    session_start();
    $_SESSION["usuario"] = $UserRegistro;
    $_SESSION["email"] = $EmailRegistro;
    $_SESSION["provincia"] = $_POST["provincia"];
     header("Location:registracion.php");
  }

}



?>

<?php include 'header.php'; ?>

 

<div class="jumbotron">
  <h1 class="display-4">Registrate</h1>
  <p class="lead">Para poder realizar reservas y busquedas personalizadas.</p>
  <hr class="my-4">


  <div class="container">
  <div class="row justify-content-center">
  <div>
  
<!-- FORMULARIO REGISTRO -->
  <form class="form-signin" method="POST" action="signin.php" >
<?php if ($ErrorRegistro==1) { ?>
  <div class="alert alert-danger" role="alert">
  <?php echo  $MensajeError ?>
</div>
<?php } ?>

<?php if ($ErrorRegistro==2) { ?>
  <div class="alert alert-warning" role="alert">

  <?php echo  $MensajeError ?>
</div>
<?php } ?>

  <!-- <img class="mb-4" src="img/bootstrap-solid.svg" alt="" width="72" height="72"> -->
  <!-- <h1 class="h3 mb-3 font-weight-normal">Por favor, registrese</h1> -->

  <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-envelope"></i></div>
        </div>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="email@ejemplo.com">

  </div>
<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-lock"></i></div>
        </div>
        <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
      </div>

<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
        </div>
        <input type="text" class="form-control" id="user" name="usuario" aria-describedby="userHelp"placeholder="Nombre de Usuario">

</div>
<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-globe-americas"></i></i></div>
        </div>

          <select class="form-control" name="provincia" id="exampleFormControlSelect1" >
            <?php foreach ($provincias as $key => $value) { ?>
            <option><?php echo $value ?></option>
            <?php } ?>
          </select>
</div>

<div class="form-group form-check">
  <label>
      <input type="checkbox" value="remember-me"> Recordarme
  </label>
</div>
<button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
<br>
<a class="mt-5 mb-3" href="login.php">Ya tengo cuenta!</a>
<p class="mt-5 mb-3 text-muted">&copy; 2019</p>
</form>
<!-- FIN FORMULARIO REGISTRO -->
</div>
  </div>
  </div>



  <p>Recuerda que regitrandote estas aceptando las politicas de privacidad..</p>

</div>