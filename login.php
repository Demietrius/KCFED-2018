<?php require('processlogin.php'); ?>
<!DOCTYPE html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registration system PHP and MySQL</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/custom.css" rel="stylesheet">
</head>
<body class="bg">

<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
        <img src="http://www.download82.com/images/produse/iconuri/limewire.png" alt="">
        <a class="navbar-brand" href="#"><h3>tasteBuds</h3></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> </a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <form class="form-signin" method="post" action="login.php" >
                        <div class="form-label-group">
                            <label for="email">Email address</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="JohnDoe@somewhere.com" required autofocus>
                        </div>
                        <div class="form-label-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="*****" required>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login_user">Sign in</button>
                        <hr class="my-4">
                    </form>
                    <p>
                        Not yet a member? <a href="register.php">Sign up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>
<br/>
</body>
</html>