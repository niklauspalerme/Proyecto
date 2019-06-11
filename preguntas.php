<?php

require_once("controladores/funciones.php");

if (isset($_SESSION["avatar"])){
  $imagen="fotosPerfil/".$_SESSION["avatar"];
}else{
$imagen="http://ssl.gstatic.com/accounts/ui/avatar_2x.png";
}

$arrayPyR= [
              0=>["titulo"=>"¿Quiénes somos?",
                  "texto"=>"Somos una website que se encarga en ayudar tanto a lugareños como extranjeros para que puedan conocer un poco mas la linda ciudad de Buenos Aires y puedan aprovechar cada rincon, eventos y sitios que esta maravillosa ciudad ofrece al mundo ",
                  "img"=> "img/Pregf_01.png"],

              1=>["titulo"=> "¿Que podes hacer aqui en BAST?",
                  "texto"=> "Aqui podras organizar una agenda con los sitios que querés visitar como tambien ver sus horarios/días de apertura y cierre, como tambien ver que comida esta de moda y actividades. ",
                  "img"=>"img/Pregf_02.png"],

              2=>["titulo"=>"¿Que es la sección LUGARES?",
                      "texto"=>"En esta sección de la pagina podaras encontrar información de cada uno de los lugares turisticos mas visitados de Bueno Aires Ciudad Capital , como tambien podras ver un breve resumen de lo que te ofrece, su ubicación, precio de entras y sus horarios de aperuta y cierre",
                      "img"=>"img/Pregf_03.png"],

              3=>["titulo"=> "¿Que podes hacer aqui en BAST?",
                  "texto"=> "Aqui podras organizar una agenda con los sitios que querés visitar como tambien ver sus horarios/días de apertura y cierre, como tambien ver que comida esta de moda y actividades. ",
                  "img"=> "img/Pregf_04.png"],

              4=>["titulo"=>"Lorem  Ipsumm",
                  "texto"=>"Somos una website que se encarga en ayudar tanto a lugareños como extranjeros para que puedan conocer un poco mas la linda ciudad de Buenos Aires y puedan aprovechar cada rincon, eventos y sitios que esta maravillosa ciudad ofrece al mundo ",
                  "img"=> "img/Pregf_05.png"],
              5=>["titulo"=> "Lorem  Ipsumm",
                  "texto"=> "Aqui podras organizar una agenda con los sitios que querés visitar como tambien ver sus horarios/días de apertura y cierre, como tambien ver que comida esta de moda y actividades. ",
                  "img"=> "img/Pregf_06.png"],

              6=>["titulo"=>"Lorem  Ipsumm",
                      "texto"=>"En esta sección de la pagina podaras encontrar información de cada uno de los lugares turisticos mas visitados de Bueno Aires Ciudad Capital , como tambien podras ver un breve resumen de lo que te ofrece, su ubicación, precio de entras y sus horarios de aperuta y cierre",
                      "img"=> "img/Pregf_07.png"],

              7=>["titulo"=> "¿BAST vas mas alla de CABA?",
                  "texto"=> "BAST esta enfocado en estimular e incrementar el turismo en Buenos Aires Ciudad Capital , así que todo su contenido va estar concentado dentro de CABA",
                  "img"=> "img/Pregf_08.png"]

];


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

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

    <!--El jumbotron de las preguntas-->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
          <div class="row wow animated fadeIn" data-wow-duration="1s">
              <h1 class="display-4 col-md-12" >Preguntas Frecuentes</h1>
              <hr class="my-4 col-md-12">
              <p class="lead col-md-12">Esta sesión esta dedica da las preguntas mas frecuentes que nos hacen nuestros visitantes Esta sesión esta dedica da las preguntas mas frecuentes que nos hacen nuestros visitantes</p>
          </div>
      </div>
    </div>

    <!--Preguntas-->
    <div class="container">
      <div class="row">

        <?php for($i=0; $i<count($arrayPyR); $i++): ?>
          <?php if($i%2==0):?>
        <div class="media">
          <img src="<?=$arrayPyR[$i]["img"]?>" class="mr-3 col-md-2 wow animated bounceInRight" data-wow-duration="1s" alt="Numero">
          <div class="media-body col-md-10 wow animated bounceInLeft" data-wow-delay="0.5s">
            <h5 class="mt-0"><?=$arrayPyR[$i]["titulo"]?>?</h5>
            <?=$arrayPyR[$i]["texto"]?>
          </div>
        </div>
        <br><br>
        <?php else: ?>
          <div class="media">
            <div class="media-body col-md-10 wow animated bounceInRight" data-wow-delay="0.5s">
              <h5 class="mt-0"><?=$arrayPyR[$i]["titulo"]?>?</h5>
              <?=$arrayPyR[$i]["texto"]?>
            </div>
            <img src="<?=$arrayPyR[$i]["img"]?>" class="mr-3 col-md-2 wow animated bounceInLeft" data-wow-duration="1s" alt="Numero">
          </div>
          <br><br>
        <?php endif ?>
      <?php endfor; ?>

      </div>
    </div>

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
