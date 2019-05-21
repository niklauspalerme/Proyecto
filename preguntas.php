<?php

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

]; ?>

<?php include 'header.php'; ?>

<!--El jumbotron de las preguntas-->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
      <div class="row">
          <h1 class="display-4 col-md-12">Preguntas Frecuentes</h1>
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
      <img src="<?=$arrayPyR[$i]["img"]?>" class="mr-3 col-md-2" alt="Numero">
      <div class="media-body col-md-10">
        <h5 class="mt-0"><?=$arrayPyR[$i]["titulo"]?>?</h5>
        <?=$arrayPyR[$i]["texto"]?>
      </div>
    </div>
    <br><br>
    <?php else: ?>
      <div class="media">
        <div class="media-body col-md-10">
          <h5 class="mt-0"><?=$arrayPyR[$i]["titulo"]?>?</h5>
          <?=$arrayPyR[$i]["texto"]?>
        </div>
        <img src="<?=$arrayPyR[$i]["img"]?>" class="mr-3 col-md-2" alt="Numero">
      </div>
      <br><br>
    <?php endif ?>
  <?php endfor; ?>

  </div>
</div>

<?php include 'footer.php'; ?>
