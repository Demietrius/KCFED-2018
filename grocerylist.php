<?php
    require("./includes/header.php");
    echo '<script src="./brainmush/manageMeals.js"></script>'; //important!***
    //echo '<script type="text/javascript">GetRecipeFromId("80ffa6f067ed26dd624de1afcc838448");</script>';
    include("./brainmush/sendMeals.php");
?>
    <!-- Page Content -->
<script type="text/javascript">
    $(function() {
        var jsonUserMeals = '<?php echo $jsonUserMeals; ?>';
        let userMeals = JSON.parse(jsonUserMeals);
        //loop each day carousel
        let breakfastMeals = getArrayByMealType("breakfast", userMeals);
        let lunchMeals = getArrayByMealType("lunch", userMeals);
        let dinnerMeals = getArrayByMealType("dinner", userMeals);
        let ingredients = [];
        for (let i=0; i<breakfastMeals.length; i++)
        {
            ingredients.push(breakfastMeals[i].ingredients);
        }

        for (let i=0; i<lunchMeals.length; i++)
        {
            ingredients.push(lunchMeals[i].ingredients);
        }

        for (let i=0; i<dinnerMeals.length; i++)
        {
            ingredients.push(dinnerMeals[i].ingredients);

        }
        console.log(ingredients);

        for(let i = 0; i < ingredients.length; i++) {
            for (let j = 0; j<ingredients[i].length; j++)
            {
                addOptionItem(ingredients[i][j].food);
            }
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

    function addOptionItem(str)
    {
        let html = '<div>' +
                    '<label class="float-left checkbox">' +
                    '<input type="checkbox" value=""> ' +
                    str +
                    '</label>' +
                    '<br/><br/>' +
                    '</div>';

        $("#ccc1").append(html);
    }

</script>



<div class="container col-sm-9 col-md-7 col-lg-3 mx-auto  ">
    <!-- Material unchecked -->
    <!-- Material unchecked -->


    <br/>
    <br/>

    <div class="portfolio-item" id="item">
        <div class="text-center border border-light  bg-light  ">
            <div class="card-body " id="ccc1">
                <h4 class="card-title">Grocery List:</h4>


            </div>
        </div>
    </div>
 
    
    
    
    
    
    

</div>

      

    <br/>
    <br/>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
