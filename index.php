<?php
session_start();

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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
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

  <link href="https://fonts.googleapis.com/css?family=Chivo&display=swap" rel="stylesheet">

    <title>BAST</title>
  </head>

  <body>

    <!-- Heeader -->
    <header>

      <nav class="navbar navbar-expand-lg navbar-dark light ml-auto d-flex
      scrolling-navbar fixed-top">

        <a class="navbar-brand logo" href="index.php">bast</a>
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
                <a class="dropdown-item nav-link transparent" href="logout.php"><i class="fas fa-sign-out-alt"></i> Salir</a>
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

    <div class="bd-example"><!-- carrousel -->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/treme_01.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h3>First slide label</h3>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                <hr>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Nulla vitae elit libero, a pharetra augue mollis interdum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/treme_01.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h3>Second slide label</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <hr>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Nulla vitae elit libero, a pharetra augue mollis interdum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/treme_01.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h3>Third slide label</h3>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                <hr>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Nulla vitae elit libero, a pharetra augue mollis interdum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">

          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"></a>
        </div>
      </div><!-- carrousel -->

    <main class="container"><!-- secciones -->

        <!---Primer card lugares para visitar-->
        <div class="jumbotron text-center hoverable p-4 wow animated bounceInLeft" data-wow-duration="1s">

          <div class="row">
            <!-- a) Imagen  -->
            <div class="col-md-4 offset-md-1 mx-3 my-3 wow animated bounceInRight" data-wow-delay="0.5s">
               <div class="view overlay">
                <img src="img/cat_01.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
               </div>
            </div>

            <!-- b) Texto y boton  -->
            <div class="col-md-7 text-md-left ml-3 mt-3">

              <h4 class="h4 mb-4 wow animated bounceInLeft" data-wow-delay="0.5s">Lugares para visitar</h4>

              <p class="font-weight-normal wow animated bounceInRight" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <a class="btn btn-blue wow animated bounceInLeft" data-wow-delay="0.5s">Ver</a>

            </div>
          </div>
        </div>

        <!--segunda card actividades-->
        <div class="jumbotron text-center hoverable p-4 wow animated bounceInRight" data-wow-duration="1s">

          <div class="row">

            <!--a)Imagen-->
            <div class="col-md-4 offset-md-1 mx-3 my-3 wow animated bounceInLeft" data-wow-delay="0.5s">

              <div class="view overlay">

                <img src="img/cat_02.jpg" class="img-fluid" alt="Sample image for first version of blog listing">

                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>

              </div>

            </div>

            <!-- b) Texto y boton  -->
            <div class="col-md-7 text-md-left ml-3 mt-3 animated bounceInLeft">

              <a href="#!" class="blue-text wow animated bounceInRight" data-wow-delay="0.5s">
                <h6 class="h6 pb-1"><i class="fas fa-desktop pr-1"></i></h6>
              </a>

              <h4 class="h4 mb-4 wow animated bounceInLeft" data-wow-delay="0.5s">Actividades</h4>

              <p class="font-weight-normal wow animated bounceInRight" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <a class="btn btn-blue wow animated bounceInLeft" data-wow-delay="0.5s">Ver</a>
            </div>

          </div>

        </div>


        <!---Tercer card Gastronomia para visitar-->
        <div class="jumbotron text-center hoverable p-4 wow animated bounceInLeft" data-wow-duration="1s">

          <div class="row">

            <!-- a) Imagen  -->
            <div class="col-md-4 offset-md-1 mx-3 my-3 wow animated bounceInRight" data-wow-delay="0.5s">
                <div class="view overlay">
                        <img src="img/cat_03.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                       </div>
              </div>

            <!-- b) Texto y boton  -->
            <div class="col-md-7 text-md-left ml-3 mt-3">

                <h4 class="h4 mb-4 wow animated bounceInLeft" data-wow-delay="0.5s">Gastronomiar</h4>

                <p class="font-weight-normal wow animated bounceInRight" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <a class="btn btn-blue wow animated bounceInLeft" data-wow-delay="0.5s">Ver</a>

                </div>

          </div>

        </div>

        <!--cuarto card actividades-->
        <div class="jumbotron text-center hoverable p-4 wow animated bounceInRight" data-wow-duration="1s">

          <div class="row">

            <!--a)Imagen-->
            <div class="col-md-4 offset-md-1 mx-3 my-3 wow animated bounceInLeft" data-wow-delay="0.5s">

              <div class="view overlay">

                <img src="img/cat_04.jpg" class="img-fluid" alt="Sample image for first version of blog listing">

                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>

              </div>

            </div>

            <!-- b) Texto y boton  -->
            <div class="col-md-7 text-md-left ml-3 mt-3 animated bounceInLeft">

              <a href="#!" class="blue-text wow animated bounceInRight" data-wow-delay="0.5s">
                <h6 class="h6 pb-1"><i class="fas fa-desktop pr-1"></i></h6>
              </a>

              <h4 class="h4 mb-4 wow animated bounceInLeft" data-wow-delay="0.5s">Hoteles</h4>

              <p class="font-weight-normal wow animated bounceInRight" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <a class="btn btn-blue wow animated bounceInLeft" data-wow-delay="0.5s">Ver</a>
            </div>

          </div>

        </div>
    </main>

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
