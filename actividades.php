<?php include 'header.php'; ?>

<!--Parte del Jumbotron-->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <h1 class="display-4 col-md-12">Actividades que podés hacer para sentirte como porteño</h1>
            <hr class="my-4 col-md-12">
            <p class="lead col-md-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
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
          <img src="http://magiaenelcamino.com.ar/wp-content/2017/05/IMG_1777.jpg" class="card-img-top" alt="...">
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
            <a href="#" class="card-link">Mas Info +</a>
            <a href="#" class="card-link">Mas Info +</a>
          </div>
        </div>
      </div>
       <?php endfor; ?>


     </div> <!--Fin card-deck -->
   </div> <!--Fin row -->
 </div> <!--Fin container -->

<?php include 'footer.php'; ?>
