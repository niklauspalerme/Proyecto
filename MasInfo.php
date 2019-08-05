<?php

require_once("helpers.php");
require_once("controladores/funciones.php");
require_once('autoload.php');


if (isset($_GET["id"])) {

  $id=$_GET["id"];
  $tabla=$_GET["tabla"];
  $lugar = Consulta::buscaUnLugar($pdo,$id,$tabla);
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

   <title>BAST</title>

 </head>

 <body>

   <!--Parte 1 del header-navbar -->
   <?php require 'assets/navbar.php'; ?>

   <div class="container container-signin">
     <div class="jumbotron">
       <div class="container">
         <!--Intro-->
         <div class="row justify-content-md-center">
           <h1 class="display-4 col-md-12 h1-registrate"><?=$lugar["name"];?></h1>
           <img src="<?=$lugar['image'];?>" alt="Imagen del Lugar" class="img-thumbnail col-md-7">

           <hr class=" col-md-7 my-4">

           <div class="col-md-7">
             <p> <b>Horarios: </b> <?=$lugar["schedule"];?></p>
           </div>

           <div class="col-md-7">
             <p> <b>Precios: </b> <?=$lugar["price"];?></p>
           </div>

           <div class="col-md-7">
             <p class="text-justify"> <b>Descripción: </b> <?=$lugar["descrip2"];?></p>
           </div>

           <!-- <div class="col-md-7">
             <a href="perfil.php"class="btn btn-md btn-morado">Regresar</a>
             <a href="perfil.php"class="btn btn-md btn-verde">Añadir +</a>
           </div> -->


         </div> <!-- fin del 2do row-->




       </div> <!--container-->

     </div> <!--jumbotron-->

   </div>

   <!--Parte X del footer -->
   <?php require 'assets/footer.php'; ?>



 </body>


 </html>
