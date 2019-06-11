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


/* dd($_SESSION); */


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

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

  <!--Todo el cuerpo es Jumbotron-->
  <div class="jumbotron">

    <div class="container bootstrap snippet">

      <br><br>

      <!--1) Parte del Nombre-->
      <div class="row">
      		<div class="col-md-12">
            <h1><?= $_SESSION["nombre"] ?></h1>
          </div>
        	<!-- <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="logo.png"></a></div> -->
      </div> <!--Parte del Nombre-->

      <!--2) Parte de la infomacion del usuario-->
      <div class="row">

        <!--2.1) Parte de la izquierda-->
    		<div class="col-sx-12 col-md-3"><!--left col-->

          <!-- 2.1.1) Parte de la foto-->
          <div class="text-center">
              <img src="fotosPerfil/<?=$_SESSION["avatar"];?>" class="avatar img-circle img-thumbnail" alt="avatar">
              <h6> Upload a different photo...</h6>
              <input type="file" class="text-center center-block file-upload">
          </div>

          <hr>

          <!-- 2.1.2) Parte de las actividades-->
          <ul class="list-group">
            <li class="list-group-item text-muted" style=" text-align:center;">
              Actividad
            </li>
            <li class="list-group-item text-left ">
                  <i class="fas fa-handshake text-success"></i>
                  <span class="pull-right"><strong>Compartido</strong></span> 125
                </li>
            <li class="list-group-item text-left">
                  <i class="fas fa-thumbs-up text-primary"></i>
                  <span class="pull-left"><strong>Me Gusta</strong></span>
                  13
                </li>
            <li class="list-group-item text-left">
                  <i class="fas fa-users text-danger"></i>
                  <span class="pull-left"><strong>Seguidores</strong></span>
                  78
                </li>
          </ul>

          <!-- 2.1.3) Parte de las redes sociales-->
          <div class="panel panel-default" style="margin-top: 15px;">
            <div class="panel-heading">
                  Social Media
            </div>
            <div class="panel-body"  style="margin-top: 5px;">
              <a href="#">
                <i class="fab fa-twitter" style="color: blue;"></i>
              </a>
              <a href="#">
                  <i class="fab fa-instagram" style="color: blue;"></i>
              </a>
              <a href="#">
                <i class="fab fa-github" style="color: blue;"></i>
              </a>
              <a href="#">
                <i class="fab fa-facebook-f" style="color: blue;"></i>
              </a>
              <a href="#">
                <i class="fab fa-google-plus-g" style="color: blue;"></i>
              </a>
            </div>
          </div>

        </div><!--Fin de parte izquierda-->

        <!--2.1) Parte de la derecha-->
        <div class="col-md-4 offset-md-1">

          <div class="tab-content">

            <div class="tab-pane active" id="home">

              <hr>

              <form class="form" action="##" method="post" id="registrationForm">

                  <div class="form-group">
                    <div class="col-xs-6">
                                <label for="first_name"><h4>Nombre</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?= $_SESSION["nombre"] ?>">
                            </div>
                  </div>

                  <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any." value="">
                            </div>

                        </div>

                  <div class="form-group">
                            <div class="col-xs-6">
                               <label for="mobile"><h4>Mobile</h4></label>
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                            </div>
                        </div>

                  <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email." value="<?= $_SESSION["email"] ?>">
                            </div>
                        </div>

                  <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password"><h4>Password</h4></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                            </div>
                        </div>

                  <div class="form-group">

                            <div class="col-xs-6">
                              <label for="password2"><h4>Verify</h4></label>
                                <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                            </div>
                        </div>

                  <div class="form-group">
                             <div class="col-xs-12">
                                  <br>
                                	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                 	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                              </div>
                        </div>

                </form>

              <hr>

            </div><!--/tab-pane-->

          </div><!--/tab-content-->

        </div><!--/Parte de la derecha terminada--->

      </div>

    </div> <!--Fin del container-->

  </div> <!--Fin del Jumbotron-->

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


</body>

</html>
