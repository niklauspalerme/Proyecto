<?php
//Llamada a las clases
require 'classes/baseMYSQL.php';
require 'classes/Consulta.php';
require 'classes/Users.php';
require 'classes/Activities.php';
require 'classes/Foods.php';
require 'classes/Hotels.php';
require 'classes/Places.php';





$host='localhost';
$bd="bast";
$usuario="root";
$password="";
$puerto="3306";
$charset="utf8";

//LLamada a la clase con la static function conexion
$pdo = BaseMYSQL::conexion($host,$bd,$usuario,$password,$puerto,$charset);
