<?php

require_once("helpers.php");
require_once("controladores/funciones.php");
require_once('autoload.php');

$id=$_GET["id"];
$tabla=$_GET["tabla"];
$idUser=$_SESSION["id"];

//dd($tabla);

//Condiciones para que detecte a que usuario le agrega el lugar

if($tabla=="activities"){
  Consulta::AgregarUsuarioActividades($pdo,"users_activities",$id,$idUser);
  header("location: actividades.php");
  exit;
}

if($tabla=="foods"){
  Consulta::AgregarUsuarioGastronomia($pdo,"users_foods",$id,$idUser);
  header("location: gastronomia.php");
  exit;
}

if($tabla=="hotels"){
  Consulta::AgregarUsuarioHoteles($pdo,"users_hotels",$id,$idUser);
  header("location: hoteles.php");
  exit;
}

if($tabla="places"){
  Consulta::AgregarUsuarioLugares($pdo,"users_places",$id,$idUser);
  header("location: lugares.php");
  exit;
}



 ?>
