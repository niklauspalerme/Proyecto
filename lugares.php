<?php include 'header.php'; ?>

<!--Parte del Jumbotron-->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
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
      <div class="col-sm-6 col-md-4 col-lg-3">
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

<?php include 'footer.php'; ?>
