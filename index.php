
<?php
    require("./includes/header.php");
    echo '<script src="./brainmush/manageMeals.js"></script>'; //important!***
    //echo '<script type="text/javascript">GetRecipeFromId("80ffa6f067ed26dd624de1afcc838448");</script>';
    include("./brainmush/sendMeals.php");
?>

<script type="text/javascript">
    $(function() {
        var jsonUserMeals = '<?php echo $jsonUserMeals; ?>';
        let userMeals = JSON.parse(jsonUserMeals);
        //loop each day carousel
        let breakfastMeals = getArrayByMealType("breakfast", userMeals);
        let lunchMeals = getArrayByMealType("lunch", userMeals);
        let dinnerMeals = getArrayByMealType("dinner", userMeals);
        for(let i = 0; i < 7; i++) {
            addMealCard(i + 1, breakfastMeals[i]);
            addMealCard(i + 1, lunchMeals[i]);
            addMealCard(i + 1, dinnerMeals[i]);
        }
    });

    function getArrayByMealType(mealType, mealArray) {
        let userMealObject;
        let outMeals = [];
        for(let i = 0; i < mealArray.length; i++) {
            if(mealArray[i].meal_type === mealType) {
                userMealObject = GetRecipeFromId(mealArray[i].meal_id);
                outMeals.push(userMealObject[0]);
            }
        }
        return outMeals;
    }

    function addMealCard(dayNum, userMeal) {
        let cardHtml = "<div class=\"col-lg-4 col-md-6 col-sm-6 portfolio-item\" id=\"meal_1\">\n" +
            "          <div class=\"card h-80\">\n" +
            "            <a href=\"" + userMeal.url + "\" target=\"_blank\" id=\"img_0\"><img class=\"card-img-top\" src=\"" + userMeal.image + "\" alt=\"\"></a>  <!-- img ID//output img src here-->\n" +
            "            <div class=\"card-body\">\n" +
            "               <div class=\"container \" style=\"align-content: center\">\n" +
            "                   <h4 class=\"card-title\" id=\"name_0\"> <!-- name ID //output meal name and a href here -->\n" +
            "                       <a href=\"#\">" + userMeal.label + "</a>\n" +
            "                   </h4>\n" +
            "                   <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">\n" +
            "                       <label class=\"btn btn-success \">\n" +
            "                           <input type=\"radio\" name=\"options\" id=\"option1\" autocomplete=\"off\" checked> Like\n" +
            "                       </label>\n" +
            "                       <label class=\"btn btn-danger\">\n" +
            "                           <input type=\"radio\" name=\"options\" id=\"option2\" autocomplete=\"off\"> Dislike\n" +
            "                       </label>\n" +
            "                   </div>\n" +
            "                   <button type=\"button\" class=\"btn btn-primary\">Reroll</button>\n" +
            "               </div>\n" +
            "            </div>\n" +
            "          </div>\n" +
            "        </div>";
        $("#card-" + dayNum ).append(cardHtml);
    }

</script>
    <!-- Page Content -->
<br/>
<br/>
    <div class="container ">

      <!-- Page Heading -->

      <!-- /.row -->
        
<div id="carouselExampleControls" class="carousel slide" data-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active" id="day-1">
    <h1 class="my-4">Sunday</h1>
      <div class="row" id="card-1">
      </div>
    </div>
    <div class="carousel-item" id="day-2">
        <h1 class="my-4">Monday</h1>
      <div class="row" id="card-2">
      </div>
    </div>
    <div class="carousel-item" id="day-3">
        <h1 class="my-4">Tuesday</h1>
      <div class="row" id="card-3">
      </div>
    </div>
    <div class="carousel-item" id="day-4">
        <h1 class="my-4">Wednesday</h1>
        <div class="row" id="card-4">
        </div>
    </div>
    <div class="carousel-item" id="day-5">
        <h1 class="my-4">Thursday</h1>
        <div class="row" id="card-5"></div>
    </div>
    <div class="carousel-item" id="day-6">
        <h1 class="my-4">Friday</h1>
        <div class="row" id="card-6">
        </div>
    </div>
    <div class="carousel-item" id="day-7">
        <h1 class="my-4">Saturday</h1>
        <div class="row" id="card-7">
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
