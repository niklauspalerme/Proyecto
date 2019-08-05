<?php

require_once("helpers.php");
require_once("controladores/funciones.php");
require_once('autoload.php');

$id=$_GET["id"];
$tabla=$_GET["tabla"];

//Condiciones para que detecte a que usuario le agrega el lugar

Consulta::EliminarGuardadoFavoritos($pdo,$tabla,$id);
header("location: Guardados.php");
exit;






 ?>
