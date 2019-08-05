<?php

require_once("helpers.php");
require_once("controladores/funciones.php");
require_once('autoload.php');

if(!isset($_SESSION["email"])){
    header("location: login.php");
    exit;
}

if (isset($_SESSION["avatar"])){
    $imagen="fotosPerfil/".$_SESSION["avatar"];
  }else{
  $imagen="http://ssl.gstatic.com/accounts/ui/avatar_2x.png";
  }
  

if ($_POST){

  $errores= Funciones::validar($_POST,'Editar');

  if(count($errores)== 0){

    //Hace el update de lo que esta en el form
    $user=Consulta::updateUsuario ($pdo,$_POST,"users",$_SESSION["id"]);

    //Luego setea la $_SESSION con la nueva info
    Funciones::seteoUsuarioUpdate($user);
    //Valida el acceso si se cambio de session
    if(Funciones::validarAcceso()){
      header("location: perfil.php");
      exit;
    }

  }


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

  <title>BAST</title>

</head>

<body>

  <!--Parte 1 del header-navbar -->
  <?php require 'assets/navbar.php'; ?>

  <!--Parte 2 del y contenido Jumbotron-->
  <div class="jumbotron">

    <div class="container bootstrap snippet">

      <br><br>

      <!--1) Parte del Nombre-->
      <div class="row">
      		<div class="col-md-12">
            <h1><?= $_SESSION["name"] ?></h1>
          </div>
        	<!-- <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="logo.png"></a></div> -->
      </div> <!--Parte del Nombre-->

      <!--2) Parte de la infomacion del usuario-->
      <div class="row">

        <!--2.1) Parte de la izquierda-->
    		<div class="col-sx-12 col-md-3"><!--left col-->

          <!-- 2.1.1) Parte de la foto-->
          <!-- NOTA: Hay que hacerle un form para que guarde EL AVATAR-->
          <div class="text-center">
              <img src="fotosPerfil/<?=$_SESSION["avatar"];?>" class="avatar-2 img-circle img-thumbnail" alt="avatar">
          </div>

          <hr>

          <!-- 2.1.2) Parte de las actividades-->
          <ul class="list-group">
            <li class="list-group-item text-muted" style=" text-align:center;">
              Actividad
            </li>
            <li class="list-group-item text-left ">
                  <i class="fas fa-handshake text-success"></i>
                  <span class="pull-right">Compartido</span> 125
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
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                  <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </div>
          </div>

        </div><!--Fin de parte izquierda-->

        <!--2.1) Parte de la derecha-->
        <div class="col-md-4 offset-md-1">

          <div class="tab-content">

            <div class="tab-pane active" id="home">

              <hr>

              <form class="form" action="perfil.php" method="POST" id="registrationForm">

                <div class="col-xs-6">
                  <?php if(isset($errores)) :?>
                    <ul class="alert alert-danger">
                      <?php foreach ($errores as $key => $value) :?>
                        <li> <?=$value ?></li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </div>

                  <div class="form-group">
                    <div class="col-xs-6">
                      <label for="first_name"><h4>Nombre</h4></label>
                      <input type="text" class="form-control" name="name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?= $_SESSION["name"] ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-6">
                      <label for="telephone"><h4>Phone</h4></label>
                      <input type="text" class="form-control" name="telephone" id="telephone" placeholder="enter telephone" title="enter your telephone number if any."  value="<?=$_SESSION["telephone"] ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-6">
                        <label for="mobile"><h4>Mobile</h4></label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any." value="<?= $_SESSION["mobile"] ?>">
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
                      <label for="repassword"><h4>Verify</h4></label>
                      <input type="password" class="form-control" name="repassword" id="repassword" placeholder="repassword" title="enter your repassword.">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-12" style="text-align: center;">
                      <button class="btn btn-lg btn-morado" type="submit"> Save</button>
                    </div>
                  </div>

                </form>

              <hr>

            </div><!--/tab-pane-->

          </div><!--/tab-content-->

        </div><!--/Parte de la derecha terminada--->

      </div> <!--row-->

      </div>

    </div> <!--Fin del container-->

  </div> <!--Fin del Jumbotron-->

  <!--Parte 3 del footer -->
  <?php require 'assets/footer.php'; ?>


</body>

</html>
