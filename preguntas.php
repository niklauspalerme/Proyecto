<?php

require_once("helpers.php");
require_once("controladores/funciones.php");
require_once('autoload.php');

if (isset($_SESSION["avatar"])){
  $imagen="fotosPerfil/".$_SESSION["avatar"];
}else{
$imagen="http://ssl.gstatic.com/accounts/ui/avatar_2x.png";
}

$preguntas=Consulta::MostrarPreguntas($pdo,"questions");

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

  <!--Nuestra pagina de estilo-->
  <link rel="stylesheet" href="css/master.css">

  <!--Pagina de estilo preguntas-->
  <link rel="stylesheet" href="css/preguntas.css">


  <title>BAST</title>

</head>

<body>


  <!--Parte 1 del header-navbar -->
  <?php require 'assets/navbar.php'; ?>

  <!--Parte 2 del Jumbotron Titulo-->
  <div class="wrap-jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="jumbotron" style=" background-image: url('img/carrousel1.jpg');">
                  <div class="container">
                      <div class="row">
                          <h1 class="display-4 col-md-12 text-center morado">Preguntas frecuentes</h1>
                          <hr class="my-4 col-md-11" style="background-color: indigo;">
                          <p class="lead col-md-12 text-center" style="color:indigo;">Esta sesión esta dedica da las preguntas mas frecuentes que nos hacen nuestros visitantes Esta sesión esta dedica da las preguntas mas frecuentes que nos hacen nuestros visitantes. </p>
                      </div>
                  </div>
            </div> <!--jumbotron-->
          </div> <!--col-md-12-->

        </div><!--row -->

      </div> <!--container-->
  </div>

  <!-- Parte 3 Preguntas-->
  <div class="wrap-preguntas">
    <div class="container">
      <div class="row">

        <?php foreach ($preguntas as $key => $value): ?>
          <?php if($value["id"]%2==0):?>
        <div class="media">
          <img src="<?=$value["image"]?>" class="mr-3 col-md-2 img-preguntas" alt="Numero">
          <div class="media-body col-md-10">
            <h5 class="mt-0 morado"><?=$value["name"]?></h5>
            <?=$value["answer"]?>
          </div>
        </div>
        <br><br>
        <?php else: ?>
          <div class="media">
            <div class="media-body col-md-10 wrap-contenido">
              <h5 class="mt-0 azul-footer"><?=$value["name"]?></h5>
              <?=$value["answer"]?>
            </div>
            <img src="<?=$value["image"]?>" class="mr-3 col-md-2 img-preguntas" alt="Numero">
          </div>
          <br><br>
        <?php endif ?>
      <?php endforeach; ?>
      </div>
    </div>

  </div>

  <!--Parte 4 del footer -->
  <?php require 'assets/footer.php'; ?>

</body>

</html>
