<?php
require_once("controladores/funciones.php");
if(!isset($_SESSION["email"])){
    header("location: login.php");
    exit;
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

      <meta charset="utf-8">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
      <!-- JQuery -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>
      <!--Nuestra pagina de estilo-->
      <link rel="stylesheet" href="css/style.css">
      <!--Nuestra pagina de animacicion-->
      <link rel="stylesheet" href="css/animate.min.css">

      <title>BAST</title>
    </head>

  <body>

    <header>  <!-- Ini header -->

      <nav class="navbar navbar-expand-lg navbar-light ml-auto d-flex fixed-top" style="background-color:#6fbffa;">

        <a class="navbar-brand logo" href="index.php">BAST</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ml-auto" id="navbarNav">

          <ul class="navbar-nav ml-auto d-flex">

            <li class="nav-item active">
              <a class="nav-link" href="lugares.php">Lugares <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="actividades.php">Actividades<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="gastronomia.php">Gastronomia<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="hoteles.php">Hoteles<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="preguntas.php">FAQ
                <i class="far fa-question-circle">  </i>
                <span class="sr-only">(current)
                </span>
              </a>
            </li>

            <!-- USUARIOS -->
            <!-- SI ESTA SIN LOGUEAR MOSTRAR ESTO -->

            <!--  USUARIO LOGUEADO MOSTRAR ESTO-->
            <li class="nav-item avatar dropdown">

              <!-- Foto de usuario -->
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink-40" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img src="<?= $imagen ;?>" class="rounded-circle z-depth-0"
                  alt="avatar" height="30">
              </a>

              <!-- Parte del menu dropdown -->
              <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
                aria-labelledby="navbarDropdownMenuLink-40">
                <a class="dropdown-item nav-link" href="perfil.php"><i class="fas fa-address-card"></i> Perfil y Cuenta</a>
                <a class="dropdown-item nav-link" href="#"><i class="fas fa-cogs"></i> Preferencias</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Salir</a>
              </div>

            </li>

            <li class="nav-item active">
              <a class="nav-link" href="login.php">
              <i class="fas fa-sign-in-alt"></i> Login
                <span class="sr-only">(current)</span></a>
            </li>

          </ul>

        </div>

      </nav><!-- Fin  nav -->

    </header> <!-- Fin del header-->

    <!--Parte del Jumbotron-->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row wow animated fadeIn" data-wow-duration="1s">
                <h1 class="display-4 col-md-12">Lugares para visitar</h1>
                <hr class="my-4 col-md-12">
                <p class="lead col-md-12">Mira todos los lugares que puedes visitar en la hermosa ciudad porteña. Dejate sorprender con las maravillas que tiene la ciudad. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
        </div>
      </div>

    <!--Parte de las cards -->
    <div class="container">
      <div class="row ">
        <div class="card-deck">

          <?php for ($i=0; $i < 8 ; $i++): ?>
          <div class="col-sm-6 col-md-4 col-lg-3 wow animated bounceInRight" data-wow-duration="1s">
            <div class="card" style="margin-bottom:15px">
              <img src="https://visitas.casarosada.gob.ar/img/bg_casarosada.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
              <div class="card-body">
                <a href="#" class="card-link">Añadir +</a>
                <a href="#" class="card-link">Mas Info +</a>
              </div>
            </div>
          </div>
           <?php endfor; ?>


         </div> <!--Fin card-deck -->
       </div> <!--Fin row -->
     </div> <!--Fin container -->

     <!-- Ini footer -->
     <footer>
       <div class="card text-white">
         <img src="img/footer.png" class="card-img" alt="...">
         <div class="card-img-overlay">
           <h3 class="card-title">Bast</h3>
           <p>Políticas de privacidad</p>
           <hr>
           <p>Nulla vitae elit libero, a pharetra augue mollis interdum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

         </div>
       </div>
     </footer>  <!-- Fin footer -->

     <!---*************************Script de wow js------------------------>
     <script src="js/wow.js"></script>

     <script>
       new WOW().init();
     </script>

  </body>

</html>
