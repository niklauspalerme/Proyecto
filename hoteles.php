<?php

require_once("helpers.php");
require_once("controladores/funciones.php");
require_once('autoload.php');

require_once("controladores/funciones.php");
if(!isset($_SESSION["email"])){
    header("location: login.php");
    exit;
}

if (isset($_SESSION["avatar"])){

  $imagen="fotosPerfil/".$_SESSION["avatar"];

  $lugares=Consulta::buscarLugar($pdo,"hotels");


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

  <!--Nuestra pagina de estilo-->
  <link rel="stylesheet" href="css/master.css">

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
                <div class="jumbotron" style=" background-image: url('img/background_02.png');">
                    <div class="container">
                        <div class="row">
                            <h1 class="display-4 col-md-12 text-center morado">Hoteles que son like home</h1>
                            <hr class="my-4 col-md-11" style="background-color: indigo;">
                            <p class="lead col-md-12 text-center" style="color:indigo;">Mira todos los lugares que puedes visitar en la hermosa ciudad porteña. Déjate sorprender por la magia de la Ciudad de Buenos Aires y explora cada uno de sus rincones. </p>
                        </div>
                    </div>
              </div> <!--jumbotron-->
            </div> <!--col-md-12-->

          </div><!--row -->

        </div> <!--container-->
    </div>

    <!--Parte de las cards -->
    <div class="container">
      <div class="row ">
        <div class="card-deck">

          <?php foreach ($lugares as $key => $value): ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card" style="margin-bottom:15px">
                <img src="<?=$value["image"];?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?=$value["name"];?></h5>
                  <p class="card-text"><?=$value["descrip1"];?></p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>Horario: </b> <?=$value["schedule"];?></li>
                  <li class="list-group-item"><b>Dirección: </b> <?=$value["address"];?></li>
                  <li class="list-group-item"><b>Precio: </b> <?=$value["price"];?></li>
                </ul>
                <div class="card-body">
                  <a href="MasInfo.php?id=<?=$value['id'];?>&tabla=hotels" class="card-link">Mas Info +</a>
                  <a href="agregar.php?id=<?=$value['id'];?>&tabla=hotels" class="card-link">Agregar +</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>


       </div> <!--Fin card-deck -->
     </div> <!--Fin row -->
    </div> <!--Fin container -->

    <!--Parte X del footer -->
    <?php require 'assets/footer.php'; ?>


  </body>

</html>
