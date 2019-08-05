
<?php

require_once("helpers.php");
require_once("controladores/funciones.php");
require_once('autoload.php');

if($_POST){

  if($_POST["tabla"]=="activities"){
    $lugar= new Activities($_POST);
    Consulta::insertarLugar($pdo,$lugar,$_POST["tabla"]);}

    if($_POST["tabla"]=="foods"){
      $lugar= new Foods($_POST);
      Consulta::insertarLugar($pdo,$lugar,$_POST["tabla"]);}

  if($_POST["tabla"]=="hotels"){
    $lugar= new Hotels($_POST);
    Consulta::insertarLugar($pdo,$lugar,$_POST["tabla"]);}

    if($_POST["tabla"]=="places"){
      $lugar= new Places($_POST);
      Consulta::insertarLugar($pdo,$lugar,$_POST["tabla"]);}





  // $errores = Funciones::validar($_POST,'registro');
  //
  // if(count($errores)== 0){
  //
  //   //Armo el avatar
  //   $avatar =Funciones::armarAvatar($_FILES);
  //
  //   //Creo el objeto usuario con los datos del form
  //   $usuario= new Users ($_POST,$avatar);
  //
  //   //Inserto el usuario a la BD
  //   Consulta::guardarUsuario($pdo,$usuario,"users");
  //
  //   //Vete a login y salte de signin
  //   header("location: login.php");
  //   exit;
  // }
}

if (isset($_SESSION["avatar"])){
  $imagen="fotosPerfil/".$_SESSION["avatar"];
}else{
$imagen="http://ssl.gstatic.com/accounts/ui/avatar_2x.png";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <meta charset="utf-8">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/css/mdb.min.css" rel="stylesheet">
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  </script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/js/mdb.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Chivo&display=swap" rel="stylesheet">

  <script src="js/inputfile-custom.js"></script>

  <!--Nuestra pagina de estilo-->
  <link rel="stylesheet" href="css/master.css">

  <link rel="stylesheet" href="css/signin.css">

  <title>Formulario BAST</title>

</head>

<body>

  <!--Parte 1 del header-navbar -->
  <?php require 'assets/navbar.php'; ?>

  <div class="container container-signin">
    <div class="jumbotron">
      <div class="container">
        <!--Intro-->
        <div class="row row justify-content-md-center">
          <h1 class="display-4 col-md-12 h1-registrate">Formularios para agregar información</h1>
          <p class=" col-md-12 p-signin">Selecione el timpo de información que quiera agregar para la pagina de BAST </p>
          <hr class=" col-md-7 my-4">




        </div> <!--row-->
        <!--Form-->
        <div class="row">
          <form class="form-signin row justify-content-md-center" action="" method="POST" enctype= "multipart/form-data"  >

          <!--Lista de errores--->
          <div class="col-md-7">
            <?php if(isset($errores)) :?>
              <ul class="alert alert-danger">
                <?php foreach ($errores as $key => $value) :?>
                  <li> <?=$value ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>

        <div class="input-group col-md-7">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-signature"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="name" name="name" placeholder="El nombre del sitio">
        </div>

        <div class="input-group col-md-7">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-map-marker-alt"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="address" name="address" placeholder="La ubicación del lugar">
        </div>

        <div class="input-group col-md-7">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-calendar-alt"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="schedule" name="schedule" placeholder="Escriba el horario del lugar">
        </div>

        <div class="input-group col-md-7">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-dollar-sign"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="price" name="price" placeholder="Escriba un estimado en adelante del lugar">
        </div>

        <div class="input-group col-md-7">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="far fa-images"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="image" name="image" placeholder="Coloque el url de la imagen">
        </div>

        <div class="input-group col-md-7">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-audio-description"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="descrip1" name="descrip1" placeholder="Una breve descripción del sitio">
        </div>

        <div class="input-group col-md-7">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-sticky-note"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="descrip2" name="descrip2" placeholder="Una descripción amplia del sitio">
        </div>

        <div class="input-group col-md-7">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Escoja el la sección</label>
          <select class="form-control" id="exampleFormControlSelect1" name="tabla">
            <option value="activities">Actividades</option>
            <option value="foods">Gastronomia</option>
            <option value="hotels">Hoteles</option>
            <option value="places">Lugares</option>
          </select>
        </div>
        </div>

      <div class="col-md-7">
        <button class="btn btn-lg btn-morado" type="submit">Guardar</button>
      </div>

</form>
        </div>
      </div> <!--container-->
    </div> <!--jumbotron-->

  </div>

  <!--Parte X del footer -->
  <?php require 'assets/footer.php'; ?>



</body>


</html>
