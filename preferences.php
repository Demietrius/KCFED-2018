<?php require("./includes/header.php"); ?>

    <!-- Page Content -->







<div class="container col-sm-9 col-md-7 col-lg-3 mx-auto rounded border-primary">
    <!-- Material unchecked -->


    <br/>
    <br/>

    <div class="portfolio-item" id="item">
        <div class="text-center border border-light  bg-light  ">
            <div class="card-body">



                <!-- numOfMeals -->
                <p class="h4 mb-4">Number of Meals:</p>
                <input type="number" id="numMeals" name="numMeals" class="browser-default  mb-4 col-lg-4 col-md-6 col-sm-6" value="3">

                <!-- Calories -->
                <p class="h4 mb-4">Calories:</p>
                <input type="number" id="calories" name="calories" class="browser-default  mb-4 col-lg-4 col-md-6 col-sm-6" value="2000">
                <br/>
                <!-- selector -->
                <p class="h4 mb-4">Diet type:</p>
                <select id="dietType" name="dietType" class="browser-default custom-select mb-4 col-lg-4 col-md-6 col-sm-6">
                    <option value="" disabled>Choose option</option>
                    <option value="1" selected>Regular</option>
                    <option value="2">Low Fat</option>
                    <option value="3">Low Carb</option>
                    <option value="4">Vegan</option>
                </select>



                <!-- checkbox -->
                <div class="custom-control custom-checkbox mb-4">

                    <input type="checkbox" class="custom-control-input" id="checkbox1">
                    <label class="custom-control-label" for="checkbox1">Peanut Free</label>

                </div>

                <div class="custom-control custom-checkbox mb-4">

                    <input type="checkbox" class="custom-control-input" id="checkbox2">
                    <label class="custom-control-label" for="checkbox2">Gluten Free</label>

                </div>

                <div class="custom-control custom-checkbox mb-4">

                    <input type="checkbox" class="custom-control-input" id="checkbox3">
                    <label class="custom-control-label" for="checkbox3">Dairy Free</label>

                </div>



                <!-- Send button -->
                <button class="btn btn-info browser-default  mb-4 col-lg-4 col-md-6 col-sm-6" type="submit" id="sendButton">Save</button>





            </div>
        </div>
    </div>
</div>
      

    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
