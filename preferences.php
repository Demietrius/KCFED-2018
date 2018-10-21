<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>4 Col Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">
  
  </head>

  <body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
      <div class="container">
          <a class="navbar-brand" href="#"><h3>tasteBuds</h3></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="menu.php">My Menu</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="grocerylist.php">Grocery List</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="preferences.php">Preferences</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="index.php?logout='1'">Log out</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

    <!-- Page Content -->
    



<div class="container">
<!-- Material unchecked -->

<div class="container">
    
    <!-- Default form contact -->
<form class="text-center border border-light p-5">

    

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
        <option value="1" selected>Babies</option>
        <option value="2">Puppies</option>
        <option value="3">Kittens request</option>
        <option value="4">Vegan</option>
    </select>

    

    <!-- checkbox -->
    <div class="custom-control custom-checkbox mb-4">
        
        <input type="checkbox" class="custom-control-input" id="checkbox1">
        <label class="custom-control-label" for="checkbox1">optional1</label>
    
    </div>
    
    <div class="custom-control custom-checkbox mb-4">
        
        <input type="checkbox" class="custom-control-input" id="checkbox2">
        <label class="custom-control-label" for="checkbox2">optional2</label>
    
    </div>
    
    <div class="custom-control custom-checkbox mb-4">
        
        <input type="checkbox" class="custom-control-input" id="checkbox3">
        <label class="custom-control-label" for="checkbox3">optional3</label>
    
    </div>
    
    

    <!-- Send button -->
    <button class="btn btn-info browser-default  mb-4 col-lg-4 col-md-6 col-sm-6" type="submit" id="sendButton">Save Prefference</button>
    
    <br/>
    <br/>

</form>
    
</div>
</div>

      

    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
