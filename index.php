
<?php
    require("./includes/header.php");
    echo '<script src="./brainmush/manageMeals.js"></script>'; //important!***
    //echo '<script type="text/javascript">GetRecipeFromId("80ffa6f067ed26dd624de1afcc838448");</script>';
    include("./brainmush/sendMeals.php");
?>
    <!-- Page Content -->

    <div class="container ">

      <!-- Page Heading -->

      <!-- /.row -->
        
<div id="carouselExampleControls" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <h1 class="my-4">Day1
        <small>Secondary Text</small>
    </h1>
      <div class="row">

          <script type="text/javascript">
              $(function() {
                  var jsonUserMeals = '<?php echo $jsonUserMeals; ?>';
                  let userMeals = JSON.parse(jsonUserMeals);
                  console.log(userMeals);
              });
          </script>
          <?php
            /* i % 3 == 0
                if i > 0 then end last carousel
                insert a new carousel item header
            */
          ?>


        <!-- single card -->
          <div class="col-lg-4 col-md-6 col-sm-6 portfolio-item" id="meal_1">
          <div class="card h-80">
            <a href="#" id="img_0"><img class="card-img-top" src="https://i.redd.it/eosfqubctht11.jpg" alt=""></a>  <!-- img ID//output img src here-->
            <div class="card-body">
               <div class="container " style="align-content: center">
                   <h4 class="card-title" id="name_0"> <!-- name ID //output meal name and a href here -->
                       <a href="#">Project One</a>
                   </h4>
                   <div class="btn-group btn-group-toggle" data-toggle="buttons">
                       <label class="btn btn-success ">
                           <input type="radio" name="options" id="option1" autocomplete="off" checked> Like
                       </label>
                       <label class="btn btn-danger">
                           <input type="radio" name="options" id="option2" autocomplete="off"> Dislike
                       </label>


                   </div>
                   <button type="button" class="btn btn-primary">Reroll</button>
               </div>
            </div>
          </div>
        </div>
          <!-- end single card-->

          <!-- single card -->
          <div class="col-lg-4 col-md-6 col-sm-6 portfolio-item" id="meal_1">
              <div class="card h-80">
                  <a href="#"><img class="card-img-top" src="https://i.redd.it/eosfqubctht11.jpg" alt=""></a>
                  <div class="card-body">
                      <div class="container " style="align-content: center">
                          <h4 class="card-title">
                              <a href="#">Project One</a>
                          </h4>

                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Like
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Dislike
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Re-roll
                          </button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- end single card-->

          <!-- single card -->
          <div class="col-lg-4 col-md-6 col-sm-6 portfolio-item" id="meal_1">
              <div class="card h-80">
                  <a href="#"><img class="card-img-top" src="https://i.redd.it/eosfqubctht11.jpg" alt=""></a>
                  <div class="card-body">
                      <div class="container " style="align-content: center">
                          <h4 class="card-title">
                              <a href="#">Project One</a>
                          </h4>

                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Like
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Dislike
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Re-roll
                          </button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- end single card-->

      </div>
    </div>
    <div class="carousel-item">
        <h1 class="my-4">Day 2
        <small>Secondary Text</small>
      </h1>
      <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 portfolio-item" id="meal_1">
              <div class="card h-80">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                      <div class="container " style="align-content: center">
                          <h4 class="card-title">
                              <a href="#">Project One</a>
                          </h4>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Like
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Dislike
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Re-roll
                          </button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 portfolio-item" id="meal_1">
              <div class="card h-80">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                      <div class="container " style="align-content: center">
                          <h4 class="card-title">
                              <a href="#">Project One</a>
                          </h4>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Like
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false">
                              Dislike
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Re-roll
                          </button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 portfolio-item" id="meal_1">
              <div class="card h-80">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                      <div class="container " style="align-content: center">
                          <h4 class="card-title">
                              <a href="#">Project One</a>
                          </h4>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Like
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Dislike
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Re-roll
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="carousel-item">
        <h1 class="my-4">Day 3
        <small>Secondary Text</small>
      </h1>
      <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 portfolio-item" id="meal_1">
              <div class="card h-80">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                      <div class="container " style="align-content: center">
                          <h4 class="card-title">
                              <a href="#">Project One</a>
                          </h4>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Like
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Dislike
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Re-roll
                          </button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 portfolio-item" id="meal_1">
              <div class="card h-80">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                      <div class="container " style="align-content: center">
                          <h4 class="card-title">
                              <a href="#">Project One</a>
                          </h4>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Like
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Dislike
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Re-roll
                          </button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 portfolio-item" id="meal_1">
              <div class="card h-80">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                      <div class="container " style="align-content: center">
                          <h4 class="card-title">
                              <a href="#">Project One</a>
                          </h4>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Like
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Dislike
                          </button>
                          <button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" >
                              Re-roll
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
    <!-- /.container -->



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
